const mongoose = require('mongoose');

mongoose.connect(
  "mongodb://localhost:27017/Cityblock", 
  { useNewUrlParser: true, useUnifiedTopology: true },
  (error) => {
    if (!error) {
      console.log('MongoDB is connected !');
    } else {
      console.error(`Error at: ${Date()}`);
      console.log('Connection error => ' + error);
    }
  }
);