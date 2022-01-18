// Imports
const express = require('express');
const router = express.Router();

const playerController = require('./playerController')
const objectController = require('./objectController')

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


// Exports API routes
module.exports = router;