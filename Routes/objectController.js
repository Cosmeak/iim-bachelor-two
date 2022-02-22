// Imports
const Object = require('../models/objectModel')
const Player = require('../models/playerModel')

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
  Object.findById( request.params.id, (error, docs) => {
    if(error) { 
      response.status(404).json({ status: 'Failure', reason: 'No object find!'}) 
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
    name    : request.body.name,
    benefit : request.body.benefit,
    cost    : request.body.cost,
    score   : request.body.score,
  }

  Object.findByIdAndUpdate(
    request.params.id,
    { $set: update },
    { new: true },
    (error, docs) => {
      if(error) {
        return response.status(500).json({ status: 'Failure', reason: error })
      }
      else {
        return response.status(200).json({ status: 'Success', data: docs})
      }
    }
  )
}

/**
* Update the specified resource in storage to add player link.
*
* @params request
* @params :id
* @return response
*/
exports.updatePlayer = (request, response) => {
  Player.findById(request.body.player, (error, data) => {
    if(data) {
      Object.findByIdAndUpdate(
        request.params.id,
        { player:data },
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
    else {
      return response.status(400).json({ status: 'Failure', reason: 'No player found with this id!' })
    }
  })
}


/**
* Remove the specified resource from storage.
*
* @params request
* @params :id
* @return response
*/
exports.destroy = (request, response) => {
  Object.findByIdAndDelete(
    request.params.id,
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