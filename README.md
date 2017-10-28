# dockerCakePHP
A clean structure for brining up a local LAMP stack to develop CakePHP 3 projects on.  -And alow use of MySQLWorkbench for DB development.

Prerequisites:
Docker. You must have Docker installed.

Using this structure and set of docker files will give you the following things:
1) A Linux/Apache container with PHP and modules needed for CakePHP v3
2) A MySQL container
3) A phpMyAdmin container
4) A data container for persisting the Database data.
5) A mapped htdocs directory to develop code locally.

Bring your containers up:
docker-compose up -d

Get a webserver response:
In your browser navigate to: http://localhost:8085
  -the index.php file contains a call to phpinfo();  If your Apache container is working you should see the PHPInfo page.
  
Login to phpMyAdmin
In your browser navigate to: http://localhost:8086
  - If everything worked you should see the phpMyAdmin login.  You can login with user: root and password: admin
  
Connect MySQLWorkbench on your local machine to the MySQL container:
Open MySQLWorkbench and add a new connection.
  - give it a name.
  - Connection Method: Standard (TCP/IP)
  - Hostname: 127.0.0.1
  - Port: 8090
  - Username: root
  - Password: admin

Installing CakePHP with Composer
Changing Ports
Trouble Shooting
