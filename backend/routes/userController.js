// Imports
const User = require('../models/userModel')
const bcrypt = require('bcrypt')

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
  const username = request.body.username
  const email = request.body.email
  const password = request.body.password
  const isAdmin = 0

  // Check if all field are full 
  if(username == null || email == null || password == null || username == '' || email == '' || password == '') {
    return response.status(400).json({status: 'Failure', reason: 'Missing parameters'})
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
          password: encryptedPassword,
          isAdmin: isAdmin,
        })

        newUser.save(error => {
          if(error) {
            return response.status(400).json({ status: 'Failure', reason: error })
          }
          else {
            return response.status(200).json({ status: 'Success', data: newUser })
          }
        })
      })
      
    } else {
      return response.status(400).json({status: 'Failure', reason: 'Email already used'})
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
    if(error) { 
      return response.status(404).json({ status: 'Failure', reason: 'No User find!'}) }
  })

  return response.status(200).json({ status: 'Success', data: data })
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
  User.findByIdAndRemove(
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

/**
* Check login data and return the user if it's good
*
* @params request
* @return response
*/

exports.login = (request, response) => {
  // Params
  var email    = request.body.email;
  var password = request.body.password;

  if (email == null ||  password == null || email == '' || password == '') {
    return response.status(400).json({ status: 'Failure', reason: 'missing parameters' });
  }

  // Find the user
  User.findOne({ email: email })
  .then(docs => {
    if(docs !== null) {
      bcrypt.compare(password, docs.password, (errBcrypt, resBcrypt) => {
        if (resBcrypt) {
          return response.status(201).json({status: 'Success', data: docs})
        } 
        else {
          return response.status(403).json({status: 'Failure', reason: 'Wrong password!'})
        }
      })
    } 
    else {
      return response.status(404).json({status: 'Failure', reason: 'No user found!'})
    }
  })
}