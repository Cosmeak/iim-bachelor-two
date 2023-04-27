const mongoose = require('mongoose')

const PositionSchema = mongoose.Schema({
  box: {
    type: String,
    required: true,
  },
  utility: {
    type: String,
    required: true,
  },
  object: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'Object', 
    required: false,
  },
}, {
  timestamps: true,
})

module.exports = mongoose.model('Position', PositionSchema)