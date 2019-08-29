<?php 



$link = 'mysql:host=localhost;dbname=tinder';
$usuario = 'root';
$password = '';
 //CONEXION PDO 

try {
    
    $pdo= new PDO($link,$usuario,$password);
    
} catch (PDOException $e) {

    print("ERROR AL CONECTAR") .$e -> getMessage()."</br>";
    
}



