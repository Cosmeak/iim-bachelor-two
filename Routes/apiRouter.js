// Imports
const express = require('express');
const gameObjectController = require('./gameObjectController');
const router = express.Router();
const userController = require('./userController');

// Time logger
router.use(function timeLog (req, res, next) {
  console.log('Request at: ', Date.now())
  next()
})

// Players Routes
router.route('/user/').get(userController.getAllUser);
router.route('/user/:idOrUsername').get(userController.getUserByIdOrName);

// Game Object Routes
router.route('/game-object/').get(gameObjectController.getAllGameObject);
router.route('/game-object/:idOrName').get(gameObjectController.getGameObjectByIdOrName);

// Exports
module.exports = router;