// Imports
const User = require('../models/userModel')
const bcrypt = require('bcrypt')
const jwt = require('jsonwebtoken')

// Functions

/**
* Display a listing of the resource.
*
* @params request
* @return response
*/
exports.index = (request, response) => {
  User.find( (error, docs) => {
    if(error) {
      response.status(500).json({ status: 'Failure', reason: error })
    }
    else {
      response.status(200).json({ status: 'Success', data: docs })
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
  const username = request.body.username
  const email = request.body.email
  const password = request.body.password

  // Check if all field are full 
  if(username == null || email == null || password == null || username == '' || email == '' || password == '') {
    response.status(400).json({status: 'Failure', reason: 'Missing parameters'})
  }

  // Check if we have no user like this in the database 
  User.findOne({ email: email })
  .then(docs => {
    // Check if we have a return null / empty and then if it is, do next things
    if(docs === null) {
      bcrypt.hash(password, 5, (error, encryptedPassword) => {
        const newUser = new User({
          username: username,
          email: email,
          password: encryptedPassword
        })

        newUser.save(error => {
          if(error) {
            response.status(400).json({ status: 'Failure', reason: error })
          }
          else {
            response.status(200).json({ status: 'Success', data: newUser })
          }
        })
      })
      
    } else {
      response.status(400).json({status: 'Failure', reason: 'Email already used'})
    }
  })
}

/** 
* Display the specified resource.
*
* @params request
* @params :id
* @return response
*/
exports.show = (request, response) => {
  const data = User.findById( request.params.id, (error, docs) => {
    if(error) { response.status(404).json({ status: 'Failure', reason: 'No User find!'}) }
  })

  response.status(200).json({ status: 'Success', data: data })
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
    username: request.body.username,
    email: request.body.email,
    password: request.body.password
  }

  User.findByIdAndUpdate(
    request.params.id,
    { $set: update },
    { new: true },
    (error, docs) => {
      if(error) {
        response.status(500).json({ status: 'Failure', reason: error })
      }
      else {
        response.status(200).json({ status: 'Success', data: docs })
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
  User.findByIdAndRemove(
    request.params.id,
    (error, docs) => {
      if(error){
        response.status(500).json({ status: 'Failure', reason: error })
      }
      else {
        response.status(200).json({ status: 'Success', data: docs})
      }
    }
  )
}

/**
* Remove the specified resource from storage.
*
* @params request
* @return response
*/

exports.login = (request, response) => {
  
}