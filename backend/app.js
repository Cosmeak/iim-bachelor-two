// Imports
const express = require('express')
const app = express()
require('./database/db-config')

//Constants
const url = '/'
const serverPort = 3000

// Routes 
app.get(url, (request, response) => { // Home of API => Just to show it's online
  response.status(200).json({ status: 'It run!'})
})

// Start app
app.listen(serverPort, () => {
  console.log('\x1b[36m%s\x1b[0m', `Launch at: ${Date()}`)
  console.log('\x1b[32m%s\x1b[0m', `Serveur running at port: ${serverPort}`)
}) // callback to know if it run and when it's open