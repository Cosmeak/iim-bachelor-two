// Imports
const models = require('../models');
const { Op } = require('sequelize');

// Constants 

// Routes
module.exports = {
  getAllGameObject: (request, response) => {
    // Params
    const fields = request.query.fields;

    // Query
    models.gameObject.findAll({
      attributes: (fields !== '*' && fields != null) ? fields.split(',') : null
    })
    .then( gameObject => {
      response.status(200).json(gameObject);
    })
    .catch( error => {
      console.log(error);
      response.status(500).json({ status: 'Failure', reason: error });
    });
  },

  getGameObjectByIdOrName: (request, response) => {
    // Params
    const fields = request.query.fields;
    const GameObjectIdOrName = request.params.idOrName;

    // Query
    models.gameObject.findOne({
      attributes: (fields !== '*' && fields != null) ? fields.split(',') : null,
      where: { [Op.or]: [ { id: GameObjectIdOrName }, { name: GameObjectIdOrName } ] }
    })
    .then( gameObject => {
      if(!gameObject){
        response.status(404).json({ status: 'Failure', reason: 'User not found!'});
      } else {
        response.status(200).json({ gameObject });
      };
    })
    .catch( error => {
      console.log(error)
      response.status(500).json({ status: 'Failure', reason: error});
    });
  },
  
};
