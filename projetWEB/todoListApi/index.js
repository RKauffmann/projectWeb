var bdd = require('./BDD_config.js')
const express = require('express');
const app = express();
const bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());


app.put('/:table/:key', (req, res) => {
	var str ='';
	var i = 0;

	Object.keys(req.body).forEach((key) => {
		str += key + ' = \'' + req.body[key] +'\'';
		i ++;
		if((Object.keys(req.body).length - i) > 0 ){
			str += ',';
		}
	})
	bdd.query({
	  sql: 'UPDATE '+ req.params.table+' SET '+ str +' WHERE IDuser = ?',
	  timeout: 40000, // 40s
	  values: [req.params.key]
	}, function (error, results, fields) {
	  if (error) throw error;
	res.end('les donnees de ' + req.params.key + ' de la table ' + req.params.table + ' on ete mise a jour');
	})
});

app.post('/:table/:key', (req, res) => {
	var str ='';
	var i = 0;

	Object.keys(req.body).forEach((key) => {
		str += key + ' = \'' + req.body[key] +'\'';
		i ++;
		if((Object.keys(req.body).length - i) > 0 ){
			str += ',';
		}
	})

	bdd.query({
	  sql: 'INSERT INTO '+ req.params.table+' SET '+ str ,
	  timeout: 40000, // 40s
	  values: [req.params.key]
	}, function (error, results, fields) {
	  if (error) throw error;
	res.end('les donnees de ' + req.params.key + ' de la table ' + req.params.table + ' on ete ajoute');
	})
});

app.get('/:table/:key', (req, res) => {

	bdd.query({
	  sql: 'SELECT * FROM '+ req.params.table+' WHERE IDuser = ?',
	  timeout: 40000, // 40s
	  values: [req.params.key]
	}, function (error, results, fields) {
	  if (error) throw error;
	  res.json(results);
	})
	
})

app.delete('/:table/:key', (req, res) => {
	bdd.query({
	  sql: 'DELETE FROM ' + req.params.table +' WHERE IDuser = ?',
	  timeout: 40000, // 40s
	  values: [req.params.key]
	}, function (error, results, fields) {
	  if (error) throw error;
	res.end('les donnees de ' + req.params.key + ' de la table ' + req.params.table + ' on ete suprimee');
	})
})


app.listen(3000)