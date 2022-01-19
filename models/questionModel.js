const mongoose = require('mongoose')

const QuestionSchema = mongoose.Schema({
  question: {
    type: String,
    required: true,
  },
  answer: {
    1: {
      content: {
        type: String,
        required: true
      },
      is_right: {
        type: Boolean,
        required: true
      }
    },
    2: {
      content: {
        type: String,
        required: true
      },
      is_right: {
        type: Boolean,
        required: true
      }
    },
    3: {
      content: {
        type: String,
        required: true
      },
      is_right: {
        type: Boolean,
        required: true
      }
    },
    4: {
      content: {
        type: String,
        required: true
      },
      is_right: {
        type: Boolean,
        required: true
      },
    },
    required:true,
  },
  anecdote: {
    type: String,
    required: false,
  }
}, {
  timestamps: true,
})

module.exports = mongoose.model('Question', QuestionSchema)