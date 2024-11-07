
const mysql = require('mysql');
const conn = mysql.createConnection({
  host: process.env.DB_HOST || 'mysql',  // Sử dụng 'mysql' làm hostname
  user: process.env.DB_USER || 'keeppley',
  password: process.env.DB_PASSWORD || 'lego',
  database: process.env.DB_NAME || 'keeppley_shop',
  port: process.env.DB_PORT || 3306
});



conn.connect(error => {
  if (error) throw error;
  else console.log("Connected to the MySQL database!");
});

module.exports = conn;
