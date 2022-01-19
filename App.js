// Imports
const express = require('express')
const app = express()
const bodyParser = require('body-parser')
const cors = require('cors')
require('./database/db-config')
const apiRouter = require('./routes/apiRouter')

//Constants 
const apiUrl = '/api/v1/'
const serverPort = 3000

//Body Parser Config 
app.use(bodyParser.urlencoded({ extended: true }))
app.use(bodyParser.json())

// Cors config
app.use(cors())

// Routes 
app.get(apiUrl, (request, response) => { // Home of API => Just to show it's online
  response.status(200).json({ status: 'API is online!'})
})

app.use(apiUrl, apiRouter)

// Start app
app.listen(serverPort, () => {
  console.log('\x1b[36m%s\x1b[0m', `Launch at: ${Date()}`)
  console.log('\x1b[32m%s\x1b[0m', `Serveur running at port: ${serverPort}`)
}) // callback to know if it run and when it's open