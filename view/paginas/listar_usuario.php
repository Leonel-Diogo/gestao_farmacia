<?php
$acao = $_GET["acao"];
#$acao = "listar";
require_once "../controller/usuarioController.php";

?>

<div class="row">
    <div class="col-12">
        <div class="row bg-dark text-white">
            <div class="col-10">
                <h6 class="flexbox">Usuários do sistema</h6>
            </div>
            <div class="col-2">
                <a href="home.php?acao=inserir" class="btn btn-secundary text-white">
                    <i class="fa-solid fa-user-plus add-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <table class="table table-striped col-12">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
                <tr>
                    <th scope="row"><?= $usuario->id ?></th>
                    <td><?= $usuario->nome ?></td>
                    <td><?= $usuario->email ?></td>
                    <td><?= $usuario->telefone ?></td>
                    <td><?= $usuario->endereco ?></td>
                    <td class="row">
                        <div class="col-12">
                            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                <i class="fas fa-trash-alt mr-3 fa-lg text-danger"
                                    onclick="remover(<?= $usuario->id ?>, '<?= $usuario->nome ?>')">
                                </i>
                                <i class="fas fa-edit fa-lg text-info" onclick="editar()"></i>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            <script>
                function remover(id, nome) {
                    if (confirm(`Deseja remover ${nome}?`)) {
                        location.href = '../controller/usuarioController.php?acao=remover&id=' + id;
                    }
                }

            </script>
        </tbody>
    </table>
</div>