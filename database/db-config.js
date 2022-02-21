const mongoose = require('mongoose');

mongoose.connect(
  "mongodb+srv://fcbouff:tFLIw3YvXh7ulB5f@fc-bouff.9kbo8.mongodb.net/test", 
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