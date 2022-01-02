// Imports
const models = require('../models');
const { Op } = require('sequelize');

// Constants 

// Routes
module.exports = {
  getAllUser: (request, response) => {
    // Params
    const fields = request.query.fields;

    // Query
    models.User.findAll({
      attributes: (fields !== '*' && fields != null) ? fields.split(',') : null,
      include: [{ 
        model: models.objectToPlayer,
        include : [{ model: models.gameObject, required: false }],
        required: false
      }]
    })
    .then( user => {
      response.status(200).json(user);
    })
    .catch( error => {
      console.log(error);
      response.status(500).json({ status: 'Failure', reason: error });
    });
  },

  getUserByIdOrName: (request, response) => {
    // Params
    const fields = request.query.fields;
    const userIdOrName = request.params.idOrUsername;

    // Query
    models.User.findOne({
      attributes: (fields !== '*' && fields != null) ? fields.split(',') : null,
      where: { [Op.or]: [ { id: userIdOrName }, { username: userIdOrName } ] }
    })
    .then( user => {
      if(!user){
        response.status(404).json({ status: 'Failure', reason: 'User not found!' });
      } else {
        response.status(200).json({ user });
      };
    })
    .catch( error => {
      console.log(error)
      response.status(500).json({ status: 'Failure', reason: error });
    });
  },

  createUser: (request, response) => {
    // Params 
    const username = request.body.username;
    const money = 0;
    const resources = 0;
    const workforces = 0;
    const score = 0;
    const createdAt = Date.now();
    const updatedAt = Date.now();
    
    if(username == null) {
      response.status(400).json({ status: 'Failure', reason: 'Missing username!'})
      console.log(response);
    };

    // Query check if the user already exist
    models.User.findOne({
      attributes: ['username'],
      where: { username: username}
    })
    .then (userFound => {
      if(!userFound) {
        // Query INSERT 
        let newUser = models.User.create({
          username: username,
          money: money,
          resources: resources,
          workforces: workforces,
          score: score,
          createdAt: createdAt,
          updatedAt: updatedAt
        })
        .then( newUser => {
          response.status(201).json({ status: 'Success', data: newUser});
        })
        .catch( error => {
          console.log(error);
          response.status(500).json({ status: 'Failure', reason: error });
        })
          
      } else {
        response.status(409).json({ status: 'Failure', reason: 'Username already exist!'})
      }
    })
    .catch( error => {
      console.log(error);
      response.status(500).json({ status: 'Failure', reason: error });
    })
  },

  updateUser: (request, response) => {
    // Params
    const fields = request.query.fields;
    const userIdOrName = request.params.idOrUsername;
    const money = request.body.money;
    const resources = request.body.resources;
    const workforces = request.body.workforces;
    const score = request.body.score;
    const updatedAt = Date.now();

    models.User.findOne({
      attributes: (fields !== '*' && fields != null) ? fields.split(',') : null,
      where: { [Op.or]: [ { id: userIdOrName }, { username: userIdOrName } ] }
    })
    .then( userFound => {
      if(userFound){
        userFound.update({
          money: (money ? money : userFound.money),
          resources: (resources ? resources : userFound.resources),
          workforces: (workforces ? workforces : userFound.workforces),
          score: (score ? score : userFound.score),
          updatedAt: updatedAt
        })
        .then( userUpdate => {
          response.status(200).json({ status: 'Success', User: userUpdate});
        })
        .catch( error => {
          console.log(error);
          response.status(500).json({ status: 'Failure', reason: 'Cannot update this user!' });
        })

      } else {
        response.status(404).json({ status: 'Failure', reason: 'User not found!' });
      };
    })
    .catch( error => {
      console.log(error);
      response.status(500).json({ status: 'Failure', reason: 'Unable to verify this user!' });
    })
  },

  deleteUser: (request, response) => {
    //Params
    const userIdOrName = request.params.idOrUsername;
    
    models.User.destroy({
      where: { [Op.or]: [ { id: userIdOrName }, { username: userIdOrName } ] }
    })
    .then( userDeleted => {
      if(userDeleted === 1) {
        response.status(200).json({ status: 'Succes', User: 'User deleted!' });
      } else {
        response.status(404).json({ status: 'Failure', reason: 'User not found!' })
      }
    })
    .catch( error => {
      console.log(error);
      response.status(500).json({ status: 'Failure', reason: 'Unable to verify this user!' })
    })
  }
  
};
