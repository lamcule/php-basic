<?php 
$serverName = "localhost";
$dbName = "php_basic";
$userName = "root";
$password = "";
try {
	$conn = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8",$userName,$password);
} catch (PDOException $e) {
	echo $e->getMessage();
}


 ?>