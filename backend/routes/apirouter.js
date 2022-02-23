// Imports
const express = require('express')
const router = express.Router()

// Controllers
const userController = require('../controllers/userController')
const messageController = require('../controllers/messageController')

// Middlewares
const auth = require('../middlewares/auth')

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
    .get(auth, userController.show)
    .patch(auth, userController.update)
    .put(auth, userController.update)
    .delete(auth, userController.destroy)

router.route('/login').post(userController.login)

// Message CRUD
router.route('/message')
    .get(auth, messageController.index)
    .post(auth, messageController.create)

router.route('/message/:id')
    .put(auth, messageController.update)
    .patch(auth, messageController.update)
    .delete(auth, messageController.destroy)

router.route('/message/user/:id').get(auth, messageController.show)

// Export all routes
module.exports = router;