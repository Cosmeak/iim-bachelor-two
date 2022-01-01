'use strict';
const {
  Model
} = require('sequelize');
module.exports = (sequelize, DataTypes) => {
  class objectToPlayer extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate(models) {
      // define association here
      models.objectToPlayer.belongsTo(models.User, {
        foreignKey: {
          allowNull: false
        }
      });

      models.objectToPlayer.belongsTo(models.gameObject, {
        foreignKey: {
          allowNull: false
        }
      });
    }
  };
  objectToPlayer.init({
    userid: DataTypes.INTEGER,
    gameobjectid: DataTypes.INTEGER
  }, {
    sequelize,
    modelName: 'objectToPlayer',
  });
  return objectToPlayer;
};