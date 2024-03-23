<?php
require_once './actions/config.php';

$id = $_GET['id'];

$sqlUser = "SELECT * FROM usuarios WHERE id = :id";
$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bindValue(':id', $id);
$stmtUser->execute();

$usuario = $stmtUser->fetch(PDO::FETCH_ASSOC);


?>

<?php include './layout/header.php'; ?>

<div class="container">
    <div class="mt-3 d-flex justify-content-between">
        <div>
            <h4>Editar Usuario</h4>
        </div>
        <div>
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
    <form class="row g-3" method="POST" action="./actions/processaEdita.php" >
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        <div class="col-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" value="<?= $usuario['nome'] ?>" >
        </div>
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?= $usuario['email'] ?>">
        </div>
        <div class="col-12">
            <label for="senha" class="form-label">Password</label>
            <input type="text" name="senha" class="form-control" id="senha" value="<?= $usuario['senha'] ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>


<?php include './layout/footer.php'; ?>