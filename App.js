// Imports
const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const cors = require('cors');
require('./models/db-config');
const apiRouter = require('./routes/apiRouter');

//Constants 
const apiUrl = '/api/v1/';
const port = 3000;

//Body Parser Config 
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Cors config
app.use(cors()); //* To open API

// Routes 
app.get(apiUrl, (request, response) => { // Home of API => Just to show it's online
  response.status(200).json({ status: 'API is online!'})
});

app.use(apiUrl, apiRouter);

// Start app
app.listen(port, () => {console.log(`Server starded at port:${port} !`)}); // callback to know if it run