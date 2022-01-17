// Imports
const express = require('express');
const router = express.Router();

// Time logger
router.use(function timeLog (request, response, next) {
  console.log('Request at: ', Date.now())
  next()
});



// Exports
module.exports = router;