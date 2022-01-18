const mongoose = require('mongoose');

const ObjectSchema = mongoose.Schema({
  name:  {
    type: String,
    required: true,
  },
  benefit: { 
    workforces : { 
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
    }
  },
  cost:{ 
      workforces : { 
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
      }
    },
  score: {
    level_1: {
      type: Number, 
      required: false,
    },
    level_1: {
      type: Number, 
      required: false,
    },
    level_1: {
      type: Number, 
      required: false,
    },
  },
  player: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'Player', 
    required: false,
  },
  position: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'Position', 
    required: false,
  },
}, {
  timestamps: true,
})

module.exports = mongoose.model('Object', ObjectSchema);