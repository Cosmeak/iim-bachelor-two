const express = require("express");
const app = express();
const bodyparser = require('body-parser');
const { database } = require("./models/db-config");

// Define your port
const port=3000; 

app.get('/', (request, response) => { // Home of API
  response.json({ status: 'API is online! You can search what you want with /:table/:id'})
});

/* -----------------------------------------------------------------------------
FOR PLAYER DATA
----------------------------------------------------------------------------- */

app.get('/player/', (request, response) => { // get all players in database => actually work but need to have more option like what table we want and what data
  database.query(
    'SELECT * FROM player',
    (error, docs) => {
      if(error) {
        console.log('Error in query => ' + error);
      }
      if (!docs) {
        response.json({ status: 'No player Found!'});
      } else {
        response.json(docs);
      };
    });
});

app.get('/player/:id', (request, response) => { // get data of a player in database => actually work but need to have more option like what table we want and what data
  database.query(
    'SELECT * FROM player WHERE id = ?',
    [ request.params.id ],
    (error, docs) => {
      if(error) {
        response.json({ status:'Failure', reason: error })
      }
      if (!docs) {
        response.json({ status: 'Failure', reason: 'No player with this id was found'});
      } else {
        response.json(docs);
      };
    });
});

app.post('/player', async (request, response) => { // to insert data in the database => actually don't work correctly
  const data = { // get the data we want to post in our database
    id: 0,
    name: request.body.name,
    score: 0
  };

  database.query(
    'INSERT INTO player SET ?',
    Object.values(data), // For values
    (error) => {
      if (!error) {
        response.json({ status: 'Failure', reason: error })
      } else {
        response.json({ status: 'Success', data: data })
      };
    });
});

/* -----------------------------------------------------------------------------
FOR SCOREBOARD DATA
----------------------------------------------------------------------------- */



// Run the application
app.listen(port, () => {
  console.log(`Serveur running at port: ${port}`);
});