const mysql = require('mysql');

const db_connexion = mysql.createConnection({
  host: 'your host',
  user: 'your user',
  password: 'your password',
  database: 'your database name'
});


db_connexion.connect( error => { // Connexion to our database
  if (!error) {
    console.log('MySQL is connected !');
  } else {
    console.log('Connection error => ' + error);
  };
});