const mongoose = require('mongoose');

const ObjectSchema = mongoose.Schema({
  id: {
    type: Number, 
    required: true,
  },
  name:  {
    type: String,
    required: true,
  },
  benefit: {
    type: Array,
    required: false,
  },
  cost: {
    type: Array,
    required: false,
  },
  score: {
    type: array
  },
  user_id: {
    type: Number, 
    required: false,
  },
  position_id: {
    type: Number,
    required: true,
  }
});

const ObjectModel = mongoose.model('Object', ObjectSchema);

module.exports = { ObjectModel };