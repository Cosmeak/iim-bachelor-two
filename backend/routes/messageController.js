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
  const user = request.body.user
  const message = request.body.message

  User.findById(user, (error, docs) => {
    const newMessage = new Message({
      user: docs,
      message: message
    })

    newMessage.save(error => {
      if(error) {
        return response.status(400).json({ status: 'Failure', reason: error })
      }
      else {
        return response.status(200).json({ status: 'Succes', data: newMessage })
      }
    })
  })
}

/** 
* Display all message of a user.
*
* @params request
* @params :id (user.id)
* @return response
*/
exports.show = (request, response) => {
  Message.find({ user: request.params.id }, (error, docs) => {
    if(error) {
      return response.status(400).json({ status: 'Failure', reason: error })
    }
    else {
      return response.status(200).json({ status: 'Success', data: docs })
    }
  })
}

/**
* Update the specified resource in storage.
*
* @params request
* @params :id
* @return response
*/
exports.update = (request, response) => {
  const update = {
    message: request.body.message,
  }

  Message.findByIdAndUpdate(
    request.params.id,
    { $set: update },
    { new: true },
    (error, docs) => {
      if(error) {
        return response.status(500).json({ status: 'Failure', reason: error })
      }
      else {
        return response.status(200).json({ status: 'Success', data: docs })
      }
    }
  )
}

/**
* Remove the specified resource from storage.
*
* @params request
* @params :id
* @return response
*/
exports.destroy = (request, response) => {
  Message.findByIdAndRemove(
    request.params.id,
    (error, docs) => {
      if(error){
        return response.status(500).json({ status: 'Failure', reason: error })
      }
      else {
        return response.status(200).json({ status: 'Success', data: docs})
      }
    }
  )
}