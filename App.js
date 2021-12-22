const express = require("express");
const app = express();
const bodyparser = require('body-parser');

require('./models/db-config');

// Define your port
const port=3000;

app.get("/", (request, response) => {
  response.json({message:'Root page'})
});

// Run the application
app.listen(port, () => {
  console.log(`Serveur running at port: ${port}`);
});