echo "Starting to read cwebserver.sh"

# Command to update packages
echo "Updating packages"
apt-get update && apt-get upgrade -y

echo "Installing apache and php"
# Command to install apache and php
apt-get install -y apache2 php libapache2-mod-php php-mysql
	
# Copying the webserver's .conf file to the shared folder
# (Look inside customer-website.conf for specifics.)
cp /vagrant/customer-website.conf /etc/apache2/sites-available/

# (a2ensite = Enable our website configuration)
a2ensite customer-website

# Disables the default website provided with Apache
a2dissite 000-default

# Reload the apache webserver configuration, to pick up our changes
service apache2 reload