// Imports
const Rule = require('../models/ruleModel')

// Functions 
/**
* Display a listing of the resource.
*
* @params request
* @return response
*/
exports.index = (request, response) => {
  Rule.find( (error, docs) => {
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
  const newRule = new Rule({
    title: request.body.title,
    content: request.body.content,
    category: request.body.category,
  })

  newRule.save( error => {
    if(error) {
      response.status(400).json({ status: 'Failure', reason: error })
    }
    else {
      response.status(200).json({ status: 'Success', data: newRule })
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
  Rule.findById(request.params.id, (error, docs) => {
    if(error) {
      response.status(404).json({ status: 'Failure', reason: 'Rule Not Found' })
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
    title: request.body.title,
    content: request.body.content,
    category: request.body.category,
  }

  Rule.findByIdAndUpdate(
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
  Rule.findByIdAndRemove(
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