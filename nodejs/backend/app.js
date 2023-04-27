// Imports
const http = require('http')
const express = require('express')
const app = express()
const bodyParser = require('body-parser') // Sert à parser (découpe le corps de la requête) le corps du requête
const apiRouter = require('./routes/apirouter')
const { Server } = require('socket.io')
const cors = require('cors')
require('./database/db-config')

//Constants 
const apiUrl = '/api'
const socketPort = process.env.PORT || 3001
const apiPort = 3000

//Body Parser Config 
app.use(bodyParser.urlencoded({ extended: true }))
app.use(bodyParser.json())

//Cors config
app.use(cors())

// Routes 
app.get(apiUrl, (request, response) => { // Home of API => Just to show it's online
  response.status(200).json({ status: 'API is online!'})
})

app.use(apiUrl, apiRouter)

// Start app
const server = http.createServer(app)
server.on('listening', () => {
  console.log('\x1b[36m%s\x1b[0m', `Launch at: ${Date()}`)
  console.log('\x1b[32m%s\x1b[0m', `Serveur running at port: ${socketPort}`)
})// callback to know if it run and when it's open

const options = {
  path: apiUrl,
  cors: {
    origin: '*',
    methods: ['GET', 'POST', 'PATCH', 'PUT', 'DELETE']
  }
}
const io = new Server(server, options)

io.on("connection", (socket) => {
  console.log(socket.id)
})

// Run http and socket server
server.listen(socketPort)
app.listen(apiPort, () => {
  console.log('API is open!')
}) 

// Export Websocket to use it in controllers
app.set('socketio', io) 