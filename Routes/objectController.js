// Imports
const Object = require('../models/objectModel')

// Functions

/**
* Display a listing of the resource.
*
* @params request
* @return response
*/
exports.index = (request, response) => {
  Object.find( (error, docs) => {
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
  const newObject = new Object({
    name    : request.body.name,
    benefit : request.body.benefit,
    cost    : request.body.cost,
    score   : request.body.score,
  })

  newObject.save( error => {
    if(error) {
      response.status(500).json({ status: 'Failure', reason: error })
    }
    else {
      response.status(200).json({ status: 'Success', data: newObject })
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
  const data = Object.findById( request.params.id, (error, docs) => {
    if(error) { response.status(404).json({ status: 'Failure', reason: 'No object find!'}) }
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

}

/**
* Remove the specified resource from storage.
*
* @params request
* @params :id
* @return response
*/
exports.destroy = (request, response) => {
  
}