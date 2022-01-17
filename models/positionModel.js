const mongoose = require('mongoose');

const PositionSchema = mongoose.Schema({
  id: {
    type: Number, 
    required: true,
  },
  utility: {
    type: String,
    required: true,
  }
});

const PositionModel = mongoose.model('Position', PositionSchema);

module.exports = { PositionModel };