// Imports
const express = require('express')
const router = express.Router()

const userController = require('./userController')
const messageController = require('./messageController')

// Time logger
router.use(function timeLog (request, response, next) {
  console.log('\x1b[36m%s\x1b[0m', `Request at: ${Date()}`)
  next()
})

// User CRUD
router.route('/user')
    .get(userController.index)
    .post(userController.create)

router.route('/user/:id')
    .get(userController.show)
    .patch(userController.update)
    .put(userController.update)
    .delete(userController.destroy)

router.route('/login').post(userController.login)

// Message CRUD
router.route('/message')
    .get(messageController.index)
    .post(messageController.create)

// Export all routes
module.exports = router;