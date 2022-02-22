// Imports
const Position = require('../models/positionModel')
const Object = require('../models/objectModel')

// Functions 
/**
* Display a listing of the resource.
*
* @params request
* @return response
*/
exports.index = (request, response) => {
  Position.find( (error, docs) => {
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
  const newPosition = new Position({
    box: request.body.box,
    utility: request.body.utility,
    object: request.body.object,
  })

  if(newPosition.object && newPosition.object !== "") {
    Object.findById(newPosition.object, (error, docs) => {
      if(docs) {
        newPosition.object = docs
        newPosition.save( error => {
          if(error) {
            response.status(400).json({ status: 'Failure', reason: error })
          }
          else {
            response.status(200).json({ status: 'Success', data: newPosition })
          }
        })
      }
      else {
        return response.status(400).json({ status: 'Failure', reason: 'Object not found!'})
      }
      
    })
  }
  else {
    newPosition.save( error => {
      if(error) {
        response.status(400).json({ status: 'Failure', reason: error })
      }
      else {
        response.status(200).json({ status: 'Success', data: newRule })
      }
    })
  }
  
}

/** 
* Display the specified resource.
*
* @params request
* @params :id
* @return response
*/
exports.show = (request, response) => {
  Position.findById(request.params.id, (error, docs) => {
    if(error) {
      response.status(404).json({ status: 'Failure', reason: 'Position Not Found' })
    } 
    else {
      response.status(200).json({ status: 'Success', data: docs })
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
    box: request.body.box,
    utility: request.body.utility,
    object: request.body.object,
  }

  if(update.object && update.object !== ""){
    Object.findById(request.body.object, (error, docs) => {
      update.object = docs
      Position.findByIdAndUpdate(
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
    })
  }

  Position.findByIdAndUpdate(
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
  Position.findByIdAndRemove(
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