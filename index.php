<?php
require_once './actions/config.php';
$sql = "SELECT * FROM usuarios";
$stmt = $conn->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<?php include './layout/header.php'; ?>
    <div class="container">
        <div class="d-flex justify-content-between mt-5">
            <div>
                <h4>Usuarios</h4>
            </div>
            <div>
                <a href="adicionar.php" class="btn btn-primary">Adicionar</a>
            </div>
        </div>

        <div class="mt-5">
            <table class=" table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($usuarios as $usuario){ ?>
                        <tr>
                            <td><?php echo $usuario['id']; ?></td>
                            <td><?php echo $usuario['nome']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                            <td>
                                <a href="edita.php?id=<?= $usuario['id']; ?>" class="btn btn-primary">Editar</a>
                                <a href="#" class="btn btn-danger btn_excluir" data-id="<?php echo $usuario['id']; ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>


                    <!-- <tr>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Telefone</td>
                        <td>
                            <button class="btn btn-primary">Editar</button>
                            <button class="btn btn-danger">Excluir</button>
                        </td>
                    </tr> -->
                    
                </tbody>
            </table>
    </div>
<?php include './layout/footer.php'; ?>


