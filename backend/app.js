// Imports
const express = require('express')
const app = express()
const bodyParser = require('body-parser')
require('./database/db-config')

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
const httpServer = require("http").createServer()
const options = {
  path: apiUrl
};
const io = require("socket.io")(httpServer, options);

io.on("connection", socket => {
  console.log(socket.id);
});

httpServer.listen(3000);

app.listen(serverPort, () => {
  console.log('\x1b[36m%s\x1b[0m', `Launch at: ${Date()}`)
  console.log('\x1b[32m%s\x1b[0m', `Serveur running at port: ${serverPort}`)
}) // callback to know if it run and when it's open