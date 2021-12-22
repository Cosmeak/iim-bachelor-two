const express = require('express');
const router = express.Router();
const { database } = require('../models/db-config');

router.get('/', (request, response) => { // get all players in database => actually work but need to have more option like what table we want and what data
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

router.get('/:id', (request, response) => { // get data of a player in database => actually work but need to have more option like what table we want and what data
  database.query(
    'SELECT * FROM player WHERE id = ?',
    [ parseInt(request.params.id) ], // block if the id parameters in url isn't an int
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

router.post('/', async (request, response) => { // to insert data in the database => actually don't work correctly
  const data = { // get the data we want to post in our database
    id: 0,
    name: request.body.name,
    score: 0
  };

  database.query(
    'INSERT INTO player SET ?',
    Object.values(data), // To return data in array
    (error) => {
      if (!error) {
        response.json({ status: 'Failure', reason: error })
      } else {
        response.json({ status: 'Success', data: data })
      };
    });
});

module.exports = router;