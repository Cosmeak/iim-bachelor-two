// Imports
const Question = require('../models/questionModel')

// Functions 
/**
* Display a listing of the resource.
*
* @params request
* @return response
*/
exports.index = (request, response) => {
  Question.find( (error, docs) => {
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
  const newQuestion = new Question({
    question: request.body.question,
    answers: request.body.answers,
    anecdotes: request.body.anecdotes,
  })

  newQuestion.save( error => {
    if(error) {
      response.status(400).json({ status: 'Failure', reason: error })
    }
    else {
      response.status(200).json({ status: 'Success', data: newQuestion })
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
  Question.findById(request.params.id, (error, docs) => {
    if(error) {
      response.status(404).json({ status: 'Failure', reason: 'Question Not Found' })
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
    question: request.body.question,
    answers: request.body.answers,
    anecdotes: request.body.anecdotes,
  }

  Question.findByIdAndUpdate(
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
  Question.findByIdAndRemove(
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