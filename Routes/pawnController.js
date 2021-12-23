const { request } = require('express');
const express = require('express');
const router = express.Router();
const { database } = require('../models/db-config');

router.get('/', async (request, response) => {
  database.query(
    'SELECT * FROM pawn',
    (error, docs) => {
      if(error) {
        response.json({ status: 'Failure', Reason: error});
      } else {
        response.json(docs);
      };
  });
});

router.get('/:id', async (request, response) => {
  database.query(
    'SELECT * FROM pawn WHERE id = ?',
    [ parseInt(request.params.id) ],
    (error, docs) => {
      if(error) {
        response.json({ status: 'Failure', reason: error});
      } else {
        response.json(docs);
      };
  });
});

router.post('/', async (request, response) => {
  const data = {
    img_url: request.body.img,
    player_id: request.body.player_id,
    position: 0
  };

  database.query(
    'INSERT INTO pawn SET ?',
    Object.values(data),
    (error) => {
      if(error) {
        response.json({ status: 'Failure', reason: error});
      } else {
        response.json({ status: 'Success', data: data});
      };
  });
});

router.put('/:id', async (request, response) => {
  const data = {
    id: request.params.id,
    position: request.body.position
  };

  database.query(
    `UPDATE pawn SET position = ${data.position} WHERE id = ${data.id}`,
    (error) => {
      if(error) {
        response.json({ status: 'Failure', reason: error });
      } else {
        response.json({ status: 'Success', data: data })
      };
  });
});

router.delete('/:id', async (request, response) => {
  database.query(
  'DELETE * FROM pawn WHERE id = ?',
  [ parseInt(request.params.id) ],
  (error, docs) => {
    if(error) {
      response.json({ status: 'Failure', reason: error });
    } else {
      response.json({ status: 'Success'})
    };
  });
});

module.exports = router;