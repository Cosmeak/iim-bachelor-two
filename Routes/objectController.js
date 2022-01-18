// Imports
const Object = require('../models/objectModel')

// Functions
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

exports.show = (request, response) => {
  Object.findById( request.params.id, (error, docs) => {
    if(error) {
      response.status(404).json({ status: 'Failure', reason: 'No object find!'})
    }
    else {
      response.status(200).json({ status: 'Success', data: docs })
    }
  })
}

exports.update = (request, response) => {

}

exports.destroy = (request, response) => {

}