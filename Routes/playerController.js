const express = require('express');
const router = express.Router();
const { database } = require('../models/db-config');

router.get('/', async (request, response) => { // get all players in database => actually work but need to have more option like what table we want and what data
  database.query(
    'SELECT * FROM player',
    (error, docs) => {
      if(error) {
        console.log('Error in query => ' + error);
      } else if (!docs[0]) {
        response.json({ status: 'No player Found!'});
      } else {
        response.json(docs);
      };
    });
});

router.get('/:id', async (request, response) => { // get data of a player in database => actually work but need to have more option like what table we want and what data
  database.query(
    'SELECT * FROM player WHERE id = ?',
    [ parseInt(request.params.id) ], // block if the id parameters in url isn't an int
    (error, docs) => {
      if(error) {
        response.json({ status:'Failure', reason: error })
      } else if(!docs[0]) { // Check if we have an element in list and if it's not it response failure
        response.json({ status: 'Failure', reason: 'No player with this id was found'});
      } else {
        response.json(docs);
      };
    });
});

router.post('/', async (request, response) => { // to insert data in the database => actually don't work correctly
  const data = { // get the data we want to post in our database
    id: request.body.id,
    name: request.body.name,
    money: 0,
    resources: 0,
    workforce: 0,
    score: 0
  };

  database.query(
    'INSERT INTO player VALUES (?, ?, ?, ?, ?, ?, NOW())',
    Object.values(data), // To return data in array
    (error) => {
      if (error) {
        response.json({ status: 'Failure', reason: error })
      } else {
        response.json({ status: 'Success', data: data })
      };
    });
});

router.put('/:id', async (request, response) => {
  const data = {
    id: request.params.id,
    name: request.body.name,
    money: request.body.money,
    resources: request.body.resources,
    workforce: request.body.workforce,
    score: request.body.score
  };

  const query = 'UPDATE player SET name = '+ data.name +', money = '+ data.money +', resources = '+ data.resources +', workforce = '+ data.workforce +', score = '+ data.score +' WHERE id = '+ data.id;

  database.query(
    query,
    (error) => {
      if(error) {
        response.json({ status: 'Failure', reason: error });
      } else {
        response.json({ status: 'Success', data: data })
      };
  });
});

router.delete('/', async (request, response) => {
  database.query(
    'SET FOREIGN_KEY_CHECKS = 0',
    (error) => {
      if(error) {
        response.json({ status: 'Failure', reason : error });
      };
  });

  database.query(
    'TRUNCATE TABLE player',
    (error) => {
      if(error) {
        response.json({ status: 'Failure', reason : error });
      } else {
        response.json({ status: 'Success' });
      };
  });
});

router.delete('/:id', async (request, response) => {
  database.query(
  'DELETE * FROM player WHERE id = ?',
  [ parseInt(request.params.id) ],
  (error, docs) => {
    if(error) {
      response.json({ status: 'Failure', reason: error });
    } else {
      response.json({ status: 'Success' });
    };
  });
});

module.exports = router;