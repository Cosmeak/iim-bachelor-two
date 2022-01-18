const mongoose = require('mongoose')

const PlayerSchema = mongoose.Schema({
  // id: {
  //   type: Number,
  //   required: true,
  // }, 
  username: {
    type: String,
    required: true,
  },
  workforces: {
    type: Number,
    required: true,
  },
  materials: {
    type: Number,
    required: true,
  }, 
  money: {
    type: Number,
    required: true,
  },
  score: {
    type: Number, 
    required: true,
  },
  play_date: {
    type: Date,
    default: Date.now
  },
  objects: {
    type: Array,
    required: false,
  },
})

const Player = mongoose.model('Player', PlayerSchema)

module.exports = { Player }