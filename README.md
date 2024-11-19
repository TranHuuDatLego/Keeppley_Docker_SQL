<h1>Keeppley Docker Setup</h1>

<h2>I. Requirement</h2>
<p><strong>Note:</strong> To avoid port conflicts, ensure MySQL in XAMPP is turned off before proceeding.</p>

<h3>1. Docker must be installed</h3>
<p>Ensure Docker is installed on your system. If not, follow the instructions on the official Docker website: <a href="https://www.docker.com/get-started" target="_blank">Get Docker</a>.</p>

<h3>2. Clone this repository</h3>
<p>Clone the Keeppley Docker repository to your local machine using the following command.</p>

<h2>II. Setup Instructions</h2>

<h3>1. Build the Docker Image</h3>
<p>Navigate to the cloned repository and build the Docker image.</p>

<h3>2. Start the Docker Compose</h3>
<p>Once the image is built, start Docker Compose to run all containers in the background.</p>

<h3>3. Container Overview</h3>
<p>The <code>docker-compose.yml</code> file sets up the following services:</p>
<ul>
    <li><strong>MySQL Database</strong>: Running on port 3306.</li>
    <li><strong>Node.js Application</strong>: Running on port 3002 (or a custom port if defined in the <code>.env</code> file).</li>
    <li><strong>phpMyAdmin</strong>: Running on port 8080 for database management.</li>
</ul>

<h3>4. Configuration <code>.env</code> file</h3>
<p>Ensure the <code>.env</code> file in your project is configured as follows:</p>
<pre>
PORT=3002
DB_HOST=mysql
DB_PORT=3306
DB_USER=keeppley
DB_PASSWORD=lego
DB_NAME=keeppley_shop
</pre>

<h2>III. Configure MySQL in Docker with Workbench</h2>

<h3>1. Install MySQL Workbench</h3>
<p>If you don't have MySQL Workbench installed, download and install it from <a href="https://dev.mysql.com/downloads/workbench/" target="_blank">MySQL Workbench</a>.</p>

<h3>2. Connect to MySQL Workbench</h3>
<p>Create a new connection in MySQL Workbench with the following details:</p>
<ul>
    <li><strong>Connection Name</strong>: keeppley-shop</li>
    <li><strong>Hostname</strong>: 127.0.0.1</li>
    <li><strong>Port</strong>: 3306</li>
    <li><strong>Username</strong>: keeppley</li>
    <li><strong>Password</strong>: lego (select "Store in Vault" to save the password)</li>
</ul>
<p>Click <strong>Test Connection</strong> to verify the connection. Once the connection is created, click it to open and check the <strong>Server Status</strong> to ensure stability.</p>

<h3>3. Insert Data into MySQL</h3>
<p>Navigate to the schema <code>keeppley_shop</code> in MySQL Workbench. Use the <strong>lightning bolt</strong> button to run the <code>keeppley_shop.sql</code> file and insert data.</p>

<h3>4. Checking Database</h3>
<p>You can use phpMyAdmin (running on <a href="http://localhost:8080" target="_blank">http://localhost:8080</a>) to confirm the database has been populated successfully.</p>

<h2>IV. Run the Keeppley Application</h2>

<h3>1. Restart the Application</h3>
<p>Once the database is set up, restart the application container using Docker Compose.</p>

<h3>2. Access the Keeppley Website</h3>
<p>The Keeppley application should now be up and running. Access the website at:</p>
<p><a href="http://localhost:3002" target="_blank">http://localhost:3002</a></p>

<h2>Congratulations!</h2>
<p>You have successfully set up the Keeppley application!</p>
