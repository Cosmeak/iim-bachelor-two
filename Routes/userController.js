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
  
};
