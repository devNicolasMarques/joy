<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "tamagotchi";
$port = 3307;

$conn = new mysqli($host,$user,$password,$database, $port);

if($conn->connect_error){
    die("Erro: ".$conn->connect_error);
}

echo "Conectado!"; 
?>