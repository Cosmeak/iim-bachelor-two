// Imports
const express = require("express");
const bodyparser = require('body-parser');
const cors = require('cors');
const apiRouter = require('./routes/apiRouter');

// Constants (Need to be configured if you want to use this API)
const serverPort = 3000;
const apiUrl = '/api/v1/';

// Instantiate app
const app = express();

// Body Parser configuration
app.use(bodyparser.urlencoded({ extended: true }));
app.use(bodyparser.json());

// Cors configuration
app.use(cors()); //* To open API

// Configure routes
app.get(apiUrl, (request, response) => { // Home of API => Just to show it's online
  response.status(200).json({ status: 'API is online!'})
});

app.use(apiUrl, apiRouter);

// Run app
app.listen(serverPort, () => {
  console.log(`Serveur running at port: ${serverPort}`);
});