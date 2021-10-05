echo "Starting to read dbserver.sh"


# Command to update Ubuntu packages
apt-get update && apt-get upgrade -y


# Creates a shell variable MYSQL_PWD that contains the MySQL root password
export MYSQL_PWD='admin'


# The next two lines automatically set up the password configuration with the package installer so that our 
# automatic script does not get stopped and asked for the information.
echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections 
echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections


# Install the MySQL database server.
echo "installing mysql"
apt-get -y install mysql-server


# Setting up the database to use.

# Create a database.
echo "CREATE DATABASE business;" | mysql

# Create an admin database user "business-admin" with the given password - same as MYSQL_PWD.
echo "CREATE USER 'business-admin'@'%' IDENTIFIED BY 'admin';" | mysql

# Grant all priveleges to the database user "business-admin", for the "business" database created
echo "GRANT ALL PRIVILEGES ON business.* TO 'business-admin'@'%'" | mysql


# Sets the MYSQL_PWD shell variable that the mysql command will try to use as the database password ...
export MYSQL_PWD='admin'


# Setup the SQL database within the sql script file (database-setup.sql)
# Using mysql command to specify the user to connect (business-admin) and the database to use(business).
cat /vagrant/database-setup.sql | mysql -u business-admin business


# Command to update the mysql.cnf file so that MySQL will accept connections from any network,
# rather than just from the local machine (127.0.0.1). This allows our other VM's to connect to the database server VM.
sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf


# Restart the MySQL server, to pick up our changes
service mysql restart