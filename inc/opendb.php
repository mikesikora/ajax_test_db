<?php
//Database Connection. This file will only establish a connection to the database.

//PDO Method
// try{
// 	$db = new PDO("mysql:host=localhost;dbname=shirts4mike;port=3306","root");
// 	// Throw exception when there is an error retrieving a query
// 	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// 	// Sets the character code of the database
// 	$db->exec("SET NAMES 'utf8'");
// }catch (Exception $e){
// 	echo "Could not connect to the database.";
// 	exit;
// }

// my_sql method
$con = mysqli_connect('localhost','root@localhost','','tourney_db');
if(!$con){
	echo "Could not conncet";
	exit;
}