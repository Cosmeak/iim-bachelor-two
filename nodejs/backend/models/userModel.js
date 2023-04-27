const mongoose = require('mongoose')
const validator = require('mongoose-unique-validator')

const UserSchema = mongoose.Schema({
  username: {
    type: String,
    required: true,
    unique: true,
  },
  email: {
    type: String,
    required: true,
  },
  password: {
    type: String,
    required: true,
  },
  isAdmin: {
    type: Boolean,
    required: true,
  }
},  
{
    timestamps: true,
})

UserSchema.plugin(validator)

module.exports = mongoose.model('User', UserSchema)