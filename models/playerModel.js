const mongoose = require('mongoose');

const PlayerSchema = mongoose.Schema({
  id: {
    type: Number,
    required: true,
  }, 
  username: {
    type: String,
    required: true,
  },
  workforces: {
    type: Number,
    required: false,
  },
  materials: {
    type: Number,
    required: false,
  }, 
  money: {
    type: Number,
    required: false,
  },
  score: {
    type: Number, 
    required: false,
  },
  play_date: {
    type: Date,
    required: false,
  },
  objects: {
    type: Array,
    required: false,
  },
});

const PlayerModel = mongoose.model('Player', PlayerSchema);

module.exports = { PlayerModel }; 