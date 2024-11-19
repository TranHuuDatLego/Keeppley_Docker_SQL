I. Requirement
Note: To avoid port conflicts, ensure MySQL in XAMPP is turned off before proceeding.

1. Docker must be installed:

2. Clone this repository
 	git clone https://github.com/TranHuuDatLego/Keeppley_Docker_SQL.git

II. Setup Instructions

1. Build the Docker Image
	docker build -t keeppley .  

2. Start the Docker Compose
	docker compose up -d  

3. Container Overview

	The docker-compose.yml file sets up:
* MySQL Database: Running on port 3306.

* Node.js Application: Running on port 3002 (or a custom port if defined in the .env file).

* phpMyAdmin: Running on port 8080 for database management.

4. Configuration .env file

PORT=3002
DB_HOST=mysql
DB_PORT=3306
DB_USER=keeppley
DB_PASSWORD=lego
DB_NAME=keeppley_shop

III. Configure MySQL in Docker with Workbench

1. Install MySQL Workbench

2. Connect to MySQL Workbench

Connection Name: keeppley-shop

Hostname: 127.0.0.1

Port: 3306

Username: keeppley

Password: lego (select "Store in Vault" to save the password)


Click Test Connection to verify the connection.
Once the connection is created, click it to open and check the Server Status to ensure stability.

3. Insert Data into MySQL
	Navigate to the schemas -> keeppley_shop in MySQL Workbench.
	Insert data keeppley_shop
.sql and use the lightning bolt button.

4. Checking database
	Using phpMyAdmin (running on http://localhost:8080) to confirm the database has been populated successfully.


IV. Run the Keeppley Application

1. Restart the application 
2. Access the Keeppley website at: http://localhost:3002

Congratulations! You have successfully set up the Keeppley application! 