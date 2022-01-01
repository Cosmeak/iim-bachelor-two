// Imports
const express = require('express');
const router = express.Router();
const userController = require('./userController');
const gameObjectController = require('./gameObjectController');

// Time logger
router.use(function timeLog (request, response, next) {
  console.log('Request at: ', Date.now())
  next()
});

// User Routes
router.route('/user/').get(userController.getAllUser);
router.route('/user/:idOrUsername').get(userController.getUserByIdOrName);
router.route('/user/').post(userController.createUser);
router.route('/user/:idOrUsername/').put(userController.updateUser);
router.route('/user/:idOrUsername/').delete(userController.deleteUser);

// Game Object Routes
router.route('/game-object/').get(gameObjectController.getAllGameObject);
router.route('/game-object/:idOrName/').get(gameObjectController.getGameObjectByIdOrName);

// Exports
module.exports = router;