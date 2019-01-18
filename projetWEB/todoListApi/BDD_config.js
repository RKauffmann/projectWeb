var mysql = require('mysql');

var con = mysql.createConnection({
	host: "localhost",
	user: "root",
	password: "",
	database: "bddnation"
});

con.connect(function(){
	console.log("connected!");
});

module.exports = con 
