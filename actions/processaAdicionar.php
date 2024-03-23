<?php
require_once './config.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha = password_hash($senha, PASSWORD_DEFAULT);


$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':senha', $senha);
$stmt->execute();

if($stmt->rowCount() > 0){
    header("Location: ../index.php");
}else{
    echo "Erro ao tentar adicionar usuario";
}


