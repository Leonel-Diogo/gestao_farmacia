<?php
#INCLUSÃO DE SCRIPTS
require_once(__DIR__ . '/../../config/conexao.php');
#require_once(__DIR__ . '/../../model/produto/produto.php');
require_once(__DIR__ . '/../../model/categoria/categoria.php');
require_once(__DIR__ . '/../../model/categoria/categoriaService.php');

$categorias = [];
$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
if ($acao == "inserirCategoria") {
    $conexao = new Conexao();
    $categoria = new Categoria();
    $categoria->__set("nome", $_POST['nome']);
    $categoria->__set("descricao", $_POST['descricao']);

    $categoriaService = new CategoriaService($conexao, $categoria);
    $categoriaService->cadastrar();
    header("Location: /gestao_farmacia/view/home.php?acao=listarCategoria");

} elseif ($acao == "listarCategoria") {
    $conexao = new Conexao();
    $categoria = new Categoria();
    $categoriaService = new CategoriaService($conexao, $categoria);
    $categorias = $categoriaService->listar();

} elseif ($acao == "removerCategoria") {
    $conexao = new Conexao();
    $categoria = new Categoria();
    $categoria->__set("id", $_GET['id']);

    $categoriaService = new CategoriaService($conexao, $categoria);
    $categoriaService->remover();
    header("Location: /gestao_farmacia/view/home.php?acao=listarCategoria");

} elseif ($acao == "editarCategoria") {
    $conexao = new Conexao();
    $categoria = new Categoria();
    $categoria->__set("id", $_GET['id']);
    $categoria->__set("nome", $_POST['nome']);
    $categoria->__set("descricao", $_POST['descricao']);

    $categoriaService = new CategoriaService($conexao, $categoria);
    $categorias = $categoriaService->editar();
    header("Location: /gestao_farmacia/view/home.php?acao=listarCategoria");
}



?>