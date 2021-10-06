echo "Starting to read db-query.sh"

user="admin"
pwd="admin3409853"
endpoint="asgn2-db.cddfazz6mjhm.us-east-1.rds.amazonaws.com"
database="business"
command="SELECT * FROM products"

output=$( mysql -h $endpoint -P 3306 -u $user -p$pwd << EOF 
use $database;
$command
EOF
)
echo "$output" >> data.txt
