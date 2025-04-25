<?php
$acao = "listarProduto";
require_once(__DIR__ . '/../../../controller/produto/produtoController.php');

?>

<div class="row">
    <div class="col-12">
        <div class="row bg-dark text-white">
            <div class="col-10">
                <h6 class="flexbox">Medicamentos</h6>
            </div>
            <div class="col-2">
                <a href="home.php?acao=inserirProduto" class="btn btn-secundary text-white">
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
                <th scope="col">Validade</th>
                <th scope="col">Estoque</th>
                <th scope="col">Preço Unitário</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto) { ?>
                <tr>
                    <th scope="row"><?= $produto->codigo ?></th>
                    <td><?= $produto->nome ?></td>
                    <td><?= $produto->validade ?></td>
                    <td><?= $produto->qtdestoque ?></td>
                    <td><?= $produto->precounitario ?></td>
                    <td class="row">
                        <div class="col-12">
                            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                <i class="fas fa-trash-alt mr-3 fa-lg text-danger"
                                    onclick="remover(<?= $produto->codigo ?>, '<?= $produto->nome ?>')">
                                </i>
                                <i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $produto->codigo ?>)"></i>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            <script>
                function remover(codigo, nome) {
                    if (confirm(`Deseja remover ${nome}?`)) {
                        location.href = '../controller/produto/produtoController.php?acao=removerProduto&codigo=' + codigo;
                    }
                }

                function editar(codigo) {
                    location.href = 'home.php?acao=editarProduto&codigo=' + codigo;
                }

            </script>
        </tbody>
    </table>
</div>