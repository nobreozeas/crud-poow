<?php

require_once './config.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$sqlUser = "SELECT * FROM usuarios WHERE id = :id";

$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bindValue(':id', $id);
$stmtUser->execute();

$usuario = $stmtUser->fetch(PDO::FETCH_ASSOC);


if ($usuario) {

    if ($senha == null) {
        $senha = $usuario['senha'];
    }

    $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header("Location: ../index.php");
    } else {

        echo "Erro ao tentar editar usuario";
    }
}
