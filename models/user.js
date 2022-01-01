'use strict';
const {
  Model
} = require('sequelize');
module.exports = (sequelize, DataTypes) => {
  class User extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate(models) {
      // define association here
      models.User.hasMany(models.objectToPlayer);
    }
  };
  User.init({
    username: DataTypes.STRING,
    money: DataTypes.INTEGER,
    resources: DataTypes.INTEGER,
    workforces: DataTypes.INTEGER,
    score: DataTypes.INTEGER
  }, {
    sequelize,
    modelName: 'User',
  });
  return User;
};