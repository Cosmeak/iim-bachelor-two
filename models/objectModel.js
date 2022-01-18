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
    type: Array,
    required: false,
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

const Object = mongoose.model('Object', ObjectSchema);

module.exports = { Object };