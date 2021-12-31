const express = require('express');
const router = express.Router();
const { database } = require('../models/db-config');

/* -----------------------------------------------------------------------------
                                    GET
----------------------------------------------------------------------------- */

router.get('/', async (request, response) => { // Get all players in database => actually work but need to have more option like what table we want and what data
  database.query(
    'SELECT * FROM player',
    (error, docs) => {
      if(error) {
        response.json({ status: 'Failure', reason: error});
      } else if(!docs[0]) { // Check if we have an element in list and if it's not it response failure
        response.json({ status: 'Failure', reason: 'No players found'});
      } else {
        response.json(docs);
      };
    });
});

router.get('/:IdOrName', async (request, response) => { // Get data of a player in database => actually work but need to have more option like what data we want
  if(request.params.IdOrName == parseInt(request.params.IdOrName, 10)) { // check if it's an id 
    database.query(
      'SELECT * FROM player WHERE id = ?',
      [ parseInt(request.params.IdOrName, 10) ],
      (error, docs) => {
        if(error) {
          response.json({ status: 'Failure', reason: error });
        } else if(!docs[0]) { 
          response.json({ status: 'Failure', reason: 'No player with this id was found' });
        } else {
          let playerData = docs[0];
          console.log(playerData);
          database.query(
            `SELECT game_object.* FROM object_to_player 
            INNER JOIN game_object ON object_to_player.game_object_id = game_object.id
            INNER JOIN player ON object_to_player.player_id = player.id WHERE player.id = ${playerData.id}`,
            (error, docs) => {
              if(error) {
                response.json({ status:'Failure', reason: error });
              } else {
                let gameObjectList = docs;
                response.json({ playerData, gameObject: gameObjectList});
              };
          });
        };
    });
  } else { // if it's not an id, it search for a name
    database.query(
      'SELECT * FROM player WHERE name = ?',
      [ `${request.params.IdOrName}` ],
      (error, docs) => {
        if(error) {
          response.json({ status:'Failure', reason: error });
        } else if(!docs[0]) { 
          response.json({ status: 'Failure', reason: 'No player with this name was found'});
        } else {
          response.json(docs);
        };
    });
  };
});

/* -----------------------------------------------------------------------------
                                INSERT
----------------------------------------------------------------------------- */

router.post('/', async (request, response) => { // Insert data in the database
  const NewName = request.body.name;

  const data = { // get the data we want to post in our database
    id: 0,
    name: NewName,
    money: 0,
    resources: 0,
    workforce: 0,
    score: 0
  };

  database.query(
    'SELECT * FROM player WHERE name = ?',
    [ `${NewName}` ],
    (error, docs) => {
      if(error) {
        response.json({ status:'Failure', reason: error });
      } else {
        if(docs[0].name === NewName) { // check if the name exist in db
          response.json({ status: 'Failure', reason: 'Name already used!' })
        } else { // if not inset it in db
          database.query(
            'INSERT INTO player VALUES (?, ?, ?, ?, ?, ?, NOW())',
            Object.values(data), // To return data in array
            (error) => {
              if (error) {
                response.json({ status: 'Failure', reason: error });
              } else {
                response.json({ status: 'Success', data: data });
              };
          });
        };
      };
    }
  );
});

/* -----------------------------------------------------------------------------
                                UPDATE
----------------------------------------------------------------------------- */

router.put('/:id', async (request, response) => { // Update a player with his id
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

/* -----------------------------------------------------------------------------
                                DELETE
----------------------------------------------------------------------------- */

router.delete('/', async (request, response) => { // This clean all player stock in the database, don't use it stupidly
  database.query(
    'SET FOREIGN_KEY_CHECKS = 0', // remove the check of FK
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

  database.query(
    'SET FOREIGN_KEY_CHECKS = 1', // Reapply the check of FK
    (error) => {
      if(error) {
        response.json({ status: 'Failure', reason : error });
      };
  });
});

router.delete('/:IdOrName', async (request, response) => {
  if(request.params.IdOrName == parseInt(request.params.IdOrName, 10)){
    database.query(
      'DELETE FROM player WHERE id = ?',
      [ parseInt(request.params.IdOrName) ],
      (error, docs) => {
        if(error) {
          response.json({ status: 'Failure', reason: error });
        } else {
          response.json({ status: 'Success' });
        };
    });
  } else {
    database.query(
      'DELETE FROM player WHERE name = ?',
      [ `${request.params.IdOrName}` ],
      (error, docs) => {
        if(error) {
          response.json({ status: 'Failure', reason: error });
        } else {
          response.json({ status: 'Success' });
        };
    });
  };
});




module.exports = router;