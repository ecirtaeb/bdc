<?php 
function connexion() {

	$user ='root';
	$password ='troiswa';
	$password= '';
	$db = new PDO('mysql:host=localhost;dbname=classicmodels', $user, $password);	
	$db->exec('SET NAMES UTF8');
	return $db;	
}
