// Imports
const { Player } = require('../models/playerModel')

//Constants

//Functions
exports.index = (request, response) => {
  Player.get( error, docs => {
    if(error) {
      response.status(500).json({ status: 'Failure', reason: error })
    } 
    else {
      response.status(200).json({ status: 'Success', data: docs })
    }
  })
}

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

exports.show = (request, response) => {
  Player.findById(request.params.id, (error, docs) => {
    if(error) {
      response.status(404).json({ status: 'Failure', reason: 'Player Not Found'})
    }
    else {
      response.status(200).json({ status: 'Success', data: docs})
    }
  })
} 

exports.update = (request, response) => {
  const update = {
    workforces  : request.body.workforces,
    materials   : request.body.materials,
    money       : request.body.money,
    score       : request.body.score,
  }

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