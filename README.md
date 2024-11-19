<h1>Keeppley Application Setup Instructions</h1>

<h2>I. Requirement</h2>
<div class="note">
    <strong>Note:</strong> To avoid port conflicts, ensure MySQL in XAMPP is turned off before proceeding.
</div>
<ol>
    <li><strong>Docker must be installed:</strong></li>
    <li>
        <strong>Clone this repository:</strong>
        <pre><code>git clone https://github.com/TranHuuDatLego/Keeppley_Docker_SQL.git</code></pre>
    </li>
</ol>

<h2>II. Setup Instructions</h2>
<ol>
    <li>
        <strong>Build the Docker Image:</strong>
        <pre><code>docker build -t keeppley .</code></pre>
    </li>
    <li>
        <strong>Start the Docker Compose:</strong>
        <pre><code>docker compose up -d</code></pre>
    </li>
    <li>
        <strong>Container Overview:</strong>
        <p>The <code>docker-compose.yml</code> file sets up:</p>
        <ul>
            <li><strong>MySQL Database:</strong> Running on port <code>3306</code>.</li>
            <li><strong>Node.js Application:</strong> Running on port <code>3002</code> (or a custom port if defined in the <code>.env</code> file).</li>
            <li><strong>phpMyAdmin:</strong> Running on port <code>8080</code> for database management.</li>
        </ul>
    </li>
    <li>
        <strong>Configuration <code>.env</code> file:</strong>
        <pre><code>PORT=3002
DB_HOST=mysql
DB_PORT=3306
DB_USER=keeppley
DB_PASSWORD=lego
DB_NAME=keeppley_shop</code></pre>
    </li>
</ol>

<h2>III. Configure MySQL in Docker with Workbench</h2>
<ol>
    <li>
        <strong>Install MySQL Workbench:</strong>
        <p>Download and install MySQL Workbench from the official website.</p>
    </li>
    <li>
        <strong>Connect to MySQL Workbench:</strong>
        <ol type="a">
            <li><strong>Connection Name:</strong> keeppley-shop</li>
            <li><strong>Hostname:</strong> <code>127.0.0.1</code></li>
            <li><strong>Port:</strong> <code>3306</code></li>
            <li><strong>Username:</strong> keeppley</li>
            <li>
                <strong>Password:</strong> lego 
                <span>(select "Store in Vault" to save the password)</span>
            </li>
        </ol>
        <p>Click <strong>Test Connection</strong> to verify the connection. Once the connection is created, click it to open and check the <strong>Server Status</strong> to ensure stability.</p>
    </li>
    <li>
        <strong>Insert Data into MySQL:</strong>
        <ol type="a">
            <li>Navigate to the <code>schemas</code> -> <code>keeppley_shop</code> in MySQL Workbench.</li>
            <li>
                Insert data using the <code>keeppley_shop.sql</code> file and use the lightning bolt button.
            </li>
        </ol>
    </li>
    <li>
        <strong>Checking Database:</strong>
        <p>Use phpMyAdmin (running on <a href="http://localhost:8080" target="_blank">http://localhost:8080</a>) to confirm the database has been populated successfully.</p>
    </li>
</ol>

<h2>IV. Run the Keeppley Application</h2>
<ol>
    <li><strong>Restart the application</strong></li>
    <li>
        <strong>Access the Keeppley website at:</strong>
        <a href="http://localhost:3002" target="_blank">http://localhost:3002</a>
    </li>
</ol>

<h2>Congratulations!</h2>
<p>You have successfully set up the Keeppley application!</p>
