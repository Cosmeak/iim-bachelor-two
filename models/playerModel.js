const mongoose = require('mongoose')

const PlayerSchema = mongoose.Schema({
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
  objects: [
    {
      type: mongoose.Schema.Types.ObjectId,
      ref: 'Object',
      required: false,
    }
  ],
}, {
  timestamps: true,
})

module.exports = mongoose.model('Player', PlayerSchema)