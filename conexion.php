<?php 



$link = 'mysql: host=localhost;dbname=tinder';
$usuario = 'root';
$password = '';

try {
	
	$pdo = new PDO($link,$usuario,$password);
	// echo "ESTAMOS CONECTADOS A LA BASE DE DATOS";
} catch ( PDOException $e) {
	
	print "ERROR!" .$e -> getMessage()."</br>";
}
