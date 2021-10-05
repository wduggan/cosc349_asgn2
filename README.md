# cosc349_asgn2

## Introduction:
- My application is a very simple online store and administration application which utilises three different virtual machines that interact with one another. One virtual machine (VM) is used to run the customer facing webserver, another to run the administration webserver, and another to run the database server.
- Full explanation on the design of the application is in the report within this repository

## How to use the application:

In order to run the virtual machines for the application, VirtualBox will need to be installed from:
```
https://www.virtualbox.org/
```

In order to run the provisioning of the virtual machines for the application, Vagrant will need to be installed from:
```
https://www.vagrantup.com/ 
```

Then the repository containing the application will need to be cloned from GitHub. In the terminal, navigate to the desired directory you want to clone the repository into and run the command:
```
git clone https://github.com/wduggan/cosc349_asgn1 
```

Once cloned, use the terminal to navigate into the directory of the repository where the Vagrantfile is contained (this can be checked with the ‘ls’ command). Then to build and start the virtual machines, run the command:
```
vagrant up
```

Once the process is complete in the terminal, you can open the VirtualBox application to see that all three VM’s should be there on display (optional). Now to interact with the application. 
To see the customer website, enter the following into any web browser:
```
http://127.0.0.1:8080 or http://192.168.2.11  
```

To see the administration website, enter the following into any web browser:
```
http://127.0.0.1:8081 or http://192.168.2.12 
```
