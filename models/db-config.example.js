const mysql = require('mysql');

const db_connexion = mysql.createConnection({
  host: 'your host',
  user: 'your user',
  password: 'your password',
  database: 'your database name'
});