// Imports
const express = require('express');
const router = express.Router();

const playerController = require('./playerController')
const objectController = require('./objectController')
const questionController = require('./questionController')
const ruleController = require('./ruleController')

// Time logger
router.use(function timeLog (request, response, next) {
  console.log('\x1b[36m%s\x1b[0m', `Request at: ${Date()}`)
  next()
})

// Player CRUD
router.route('/player')
  .get(playerController.index)
  .post(playerController.create)

router.route('/player/:id')
  .get(playerController.show)
  .patch(playerController.update)
  .put(playerController.update)
  .delete(playerController.destroy)


// Object CRUD
router.route('/object')
  .get(objectController.index)
  .post(objectController.create)

router.route('/object/:id')
  .get(objectController.show)
  .patch(objectController.update)
  .put(objectController.update)
  .delete(objectController.destroy)

router.route('/object/:id/player')
  .put(objectController.updatePlayer)
  .patch(objectController.updatePlayer)


// Question CRUD
router.route('/player')
  .get(questionController.index)
  .post(questionController.create)

router.route('/player/:id')
  .get(questionController.show)
  .patch(questionController.update)
  .put(questionController.update)
  .delete(questionController.destroy)


// Rule CRUD
router.route('/player')
  .get(ruleController.index)
  .post(ruleController.create)

router.route('/player/:id')
  .get(ruleController.show)
  .patch(ruleController.update)
  .put(ruleController.update)
  .delete(ruleController.destroy)

// Exports API routes
module.exports = router;