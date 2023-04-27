const mongoose = require('mongoose')

const QuestionSchema = mongoose.Schema({
  question: {
    type: String,
    required: true,
  },
  answers: {
    1: {
      content: {
        type: String,
        required: true,
      },
      is_right: {
        type: Boolean,
        required: true,
      },

    },
    2: {
      content: {
        type: String,
        required: true,
      },
      is_right: {
        type: Boolean,
        required: true,
      },

    },
    3: {
      content: {
        type: String,
        required: true,
      },
      is_right: {
        type: Boolean,
        required: true,
      },
      required: false,
    },
    4: {
      content: {
        type: String,
        required: true,
      },
      is_right: {
        type: Boolean,
        required: true,
      },
      required: false,
    },
  },
  anecdotes: [{
    name: {
      type: String,
      required:true,
    },
    content: {
      type: String,
      required: true,
    },
    required: false,
  }]
}, {
  timestamps: true,
})

module.exports = mongoose.model('Question', QuestionSchema)