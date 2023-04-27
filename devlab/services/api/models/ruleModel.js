const mongoose = require('mongoose')

const RuleSchema = mongoose.Schema({
  title: {
    type: String,
    required: true,
  },
  content: {
    type: String,
    required: true,
  },
  category: {
    type: String,
    required: true,
  }
}, {
  timestamps: true,
})

module.exports = mongoose.model('Rule', RuleSchema)