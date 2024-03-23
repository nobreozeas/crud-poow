<?php
require_once './config.php';

$id = $_GET['id'];

$sqlUser = "SELECT * FROM usuarios WHERE id = :id";
$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bindValue(':id', $id);
$stmtUser->execute();

$usuario = $stmtUser->fetch(PDO::FETCH_ASSOC);

if($usuario){
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $usuario['id']);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        header("Location: ../index.php");
    }else{
        echo "Erro ao tentar excluir usuario";
    }
}






