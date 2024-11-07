const mysql = require('mysql');

const conn = mysql.createConnection({
  host: 'localhost',
  port: 3307,          // dùng port 3307 vì bạn đã ánh xạ từ 3306 của container MySQL
  user: 'keeppley',
  password: 'lego',
  database: 'keeppley_shop'
});

conn.connect(error => {
  if (error) throw error;
  console.log("Connected to the MySQL database!");
});

module.exports = conn;
