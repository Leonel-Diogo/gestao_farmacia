<?php
$acao = "listarCategoria";
require_once(__DIR__ . "/../../../controller/categoria/categoriaController.php");

?>

<div class="row">
    <div class="col-12">
        <div class="row bg-dark text-white">
            <div class="col-10">
                <h6 class="flexbox">Categorias de Medicamentos</h6>
            </div>
            <div class="col-2">
                <a href="home.php?acao=inserirCategoria" class="btn btn-secundary text-white">
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
                <th scope="col">Descrição</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria) { ?>
                <tr>
                    <th scope="row"><?= $categoria->id ?></th>
                    <td><?= $categoria->nome ?></td>
                    <td><?= $categoria->descricao ?></td>
                    <td class="row">
                        <div class="col-12">
                            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                <i class="fas fa-trash-alt mr-3 fa-lg text-danger"
                                    onclick="remover(<?= $categoria->id ?>, '<?= $categoria->nome ?>')">
                                </i>
                                <i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $categoria->id ?>)"></i>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            <script>
                function remover(id, nome) {
                    if (confirm(`Deseja remover ${nome}?`)) {
                        location.href = '../controller/categoria/categoriaController.php?acao=removerCategoria&id=' + id;
                    }
                }

                function editar(id) {
                    location.href = 'home.php?acao=editarCategoria&id=' + id;
                }

            </script>
        </tbody>
    </table>
</div>