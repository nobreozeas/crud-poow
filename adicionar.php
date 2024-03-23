<?php

?>

<?php include './layout/header.php'; ?>

<div class="container">
    <div class="mt-3 d-flex justify-content-between">
        <div>
            <h4>Adicionar Usuario</h4>
        </div>
        <div>
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
    <form class="row g-3" method="POST" action="./actions/processaAdicionar.php" >
        <div class="col-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" >
        </div>
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="col-12">
            <label for="senha" class="form-label">Password</label>
            <input type="password" name="senha" class="form-control" id="senha">
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>


<?php include './layout/footer.php'; ?>