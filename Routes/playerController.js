// Imports
const Player  = require('../models/playerModel')
const Object  = require('../models/objectModel')

//Functions
// *
// * Display a listing of the resource.
// *
// * @params request
// * @return response
// *
exports.index = (request, response) => {
  Player.find( (error, docs) => {
    if(error) {
      response.status(500).json({ status: 'Failure', reason: error })
    } 
    else {
      response.status(200).json({ status: 'Success', data: docs })
    }
  })
}

// * 
// * Store a newly created resource in storage.
// *
// * @params request
// * @return response
// *
exports.create = (request, response) => {
  const newPlayer = new Player({
    username    : request.body.username,
    workforces  : 0,
    materials   : 0,
    money       : 0,
    score       : 0,
  })

  newPlayer.save( error => {
    if(error) {
      response.status(400).json({ status: 'Failure', reason: error })
    }
    else {
      response.status(200).json({ status: 'Success', data: newPlayer })
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
  const data = Player.findById(request.params.id, (error, docs) => {
    if(error) {
      response.status(404).json({ status: 'Failure', reason: 'Player Not Found' })
    } 
  }).populate('Object')
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
    workforces  : request.body.workforces,
    materials   : request.body.materials,
    money       : request.body.money,
    score       : request.body.score,
  }
  const objects = Object.findById( request.body.objects[0], (error, docs) => {
    if(error){ response.status(404).json({ status: 'Failure', reason: 'Object Not Found!'})}
  })
  
  update.objects = objects

  Player.findByIdAndUpdate(
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
  Player.findByIdAndRemove(
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