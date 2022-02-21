// Imports
const Message = require('../models/messageModel')
const User = require('../models/userModel')

// Functions
/**
* Display a listing of the resource.
*
* @params request
* @return response
*/
exports.index = (request, response) => {
  Message.find({})
  .sort({createdAt: 'asc'})
  .exec((error, docs) => {
    if(error) {
      return response.status(500).json({ status: 'Failure', reason: error })
    }
    else {
      return response.status(200).json({ status: 'Success', data: docs })
    }
  })
}

/** 
* Store a newly created resource in storage.
*
* @params request
* @return response
*/
exports.create = (request, response) => {
  // Params

}