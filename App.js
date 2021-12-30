const express = require("express");
const bodyparser = require('body-parser');
const cors = require('cors');
const app = express();

const playerRoutes = require('./routes/playerController');

app.use(bodyparser.json());
app.use(cors()); // To open API

app.get('/', (request, response) => { // Home of API => Just to show it's online
  response.json({ status: 'API is online!'})
});

app.use('/player', playerRoutes);

// Run the application
const port = 3000;
app.listen(port, () => {
  console.log(`Serveur running at port: ${port}`);
});