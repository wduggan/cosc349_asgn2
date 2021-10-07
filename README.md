# cosc349_asgn2

## Introduction:
- My application is a very simple online store and administration application with a customer facing webserver, an administration webserver. It uses two Amazon EC2 Instances/Virtual Machines running Ubuntu to deploy and run each webserver, one Amazon RDS (Relational Database Service) running a MySQL server to host the database, and one Amazon S3 object storage service to store backups of the database and images for the websites.
- Full explanation on the design of the application is in the report within this repository

## How to use the application:
To use the customer website, enter the following into any web browser:
```
http://ec2-18-206-54-169.compute-1.amazonaws.com or http://18.206.54.169 
```

To use the administration website, enter the following into any web browser:
```
http://ec2-184-73-128-114.compute-1.amazonaws.com or http://184.73.128.114
```
