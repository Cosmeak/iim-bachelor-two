const express = require("express");
const bodyparser = require('body-parser');
const cors = require('cors');
const app = express();

const playerRoutes = require('./routes/playerController');
const pawnRoutes = require('./routes/pawnController');

app.use(bodyparser.json());
app.use(cors()); // To open API

app.get('/', (request, response) => { // Home of API => Just to show it's online
  response.json({ status: 'API is online! You can search what you want with /:table/:id'})
});

app.use('/player', playerRoutes);
app.use('/pawn', pawnRoutes); 

// Run the application
const port = 3000;
app.listen(port, () => {
  console.log(`Serveur running at port: ${port}`);
});

date = new Date();
console.log(date);