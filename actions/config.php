<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Erro na conexão: " . $e->getMessage();
}