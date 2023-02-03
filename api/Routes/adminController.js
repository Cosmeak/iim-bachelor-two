//* Imports
const Admin = require('../models/adminModel')
const bcrypt = require('bcrypt')

//* Function
/** 
* Store a newly created resource in storage.
*
* @params request
* @return response
*/
exports.register = (request, response) => {
  // Params
  const email = request.body.email
  const password = request.body.password
  const isAdmin = 0

  // Check if all field are full 
  if(email == null || password == null ||  email == '' || password == '') {
    return response.status(400).json({status: 'Failure', reason: 'Missing parameters'})
  }

  // Check if we have no Admin like this in the database 
  Admin.findOne({ email: email })
  .then(docs => {
    // Check if we have a return null / empty and then if it is, do next things
    if(docs === null) {
      bcrypt.hash(password, 5, (error, encryptedPassword) => {
        const newAdmin = new Admin({
          email: email,
          password: encryptedPassword,
          isAdmin: isAdmin,
        })

        newAdmin.save(error => {
          if(error) {
            return response.status(400).json({ status: 'Failure', reason: error })
          }
          else {
            return response.status(200).json({ status: 'Success', data: newAdmin })
          }
        })
      })

    } else {
      return response.status(400).json({status: 'Failure', reason: 'Email already used'})
    }
  })
      .catch(error => response.status(400).json({ status: 'Failure', reason: error }))
}

/**
* Check login data and return the Admin if it's good
*
* @params request
* @return response
*/
exports.login = (request, response) => {
  // Params
  var email    = request.body.email;
  var password = request.body.password;

  if (email == null ||  password == null || email == '' || password == '') {
    return response.status(400).json({ status: 'Failure', reason: 'Missing parameters' });
  }

  // Find the Admin
  Admin.findOne({ email: email })
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
      return response.status(404).json({status: 'Failure', reason: 'No Admin found!'})
    }
  })
}