<?php 
//on connecte a la BDD
$dbhost="localhost";
$dbuser="root";
$dbpass="root ";
 
$dblink=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db("eyetracker",$dblink);
 
//on lance la requete
$query = "SELECT * FROM temp";
$result = mysql_query($query,$dblink) or die (mysql_error($dblink));