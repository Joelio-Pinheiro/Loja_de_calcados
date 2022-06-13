const Sequelize = require('sequelize');
const sequelize = new Sequelize("lista", "root", "", {
    host: 'localhost',
    dialect: 'mysql'
});
sequelize.authenticate()
.then(function(){
    console.log("deu bom!")
}).catch(function(){
    console.log("nao deu bom!");
})
module.exports = sequelize;