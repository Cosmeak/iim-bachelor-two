// Imports
const http = require('http')
const socket = require('socket.io')
const express = require('express')
const app = express()
const bodyParser = require('body-parser') // Sert à parser (découpe le corps de la requête) le corps du requête
require('./database/db-config')
const apiRouter = require('./routes/apirouter')

//Constants 
const apiUrl = '/api'
const serverPort = 3000

//Body Parser Config 
app.use(bodyParser.urlencoded({ extended: true }))
app.use(bodyParser.json())

// Routes 
app.get(apiUrl, (request, response) => { // Home of API => Just to show it's online
  response.status(200).json({ status: 'API is online!'})
})

app.use(apiUrl, apiRouter)

// Start app
app.set('port', serverPort)
const server = http.createServer(app)
server.on('listening', () => {
  console.log('\x1b[36m%s\x1b[0m', `Launch at: ${Date()}`)
  console.log('\x1b[32m%s\x1b[0m', `Serveur running at port: ${serverPort}`)
})// callback to know if it run and when it's open

const options = {
  path: apiUrl,
  cors: {
    origin: '*',
    methods: ['GET', 'POST', 'PATCH', 'PUT', 'DELETE']
  }
}
const io = socket(server, options)

io.on("connection", socket => {
  console.log(socket.id)
})

server.listen(process.env.PORT || serverPort)  