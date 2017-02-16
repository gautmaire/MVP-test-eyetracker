<?php 

// session_start();

$host = 'localhost';
$dbname = '';
$user = 'root';
$pass = 'root';

$option = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
	
try{
	$connexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, $option);
} catch(Exception $e){
		die('Connexion à la base de données impossible !');
}

?>