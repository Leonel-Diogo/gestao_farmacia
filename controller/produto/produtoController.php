<?php

#INCLUSÃO DE SCRIPTS
require_once(__DIR__ . '/../../config/conexao.php');
#require_once(__DIR__ . '/../../model/produto/produto.php');
require_once(__DIR__ . '/../../model/produto/produto.php');
require_once(__DIR__ . '/../../model/produto/produtoService.php');
#REVER
require_once(__DIR__ . '/../../model/categoria/categoria.php');
require_once(__DIR__ . '/../../model/categoria/categoriaService.php');

$produtos = [];
$categorias = [];
$acao = isset($_GET["acao"]) ? $_GET["acao"] : $acao;

if ($acao == "inserirProduto") {
    $conexao = new Conexao();
    $produto = new Produto();
    $produto->__set("nome", $_POST['nome']);
    $produto->__set("validade", $_POST['validade']);
    $produto->__set("qtdestoque", $_POST['qtdestoque']);
    $produto->__set("precounitario", $_POST['precounitario']);
    #REVER
    $produto->__set("categoria", $_POST['categoria']);

    $produtoService = new ProdutoService($conexao, $produto);
    $produtoService->inserir();
    header("Location: /gestao_farmacia/view/home.php?acao=listarProduto");
    exit;
} elseif ($acao == "listarProduto") {
    $conexao = new Conexao();
    $produto = new Produto();

    $produtoService = new ProdutoService($conexao, $produto);
    $produtos = $produtoService->listar();
} elseif ($acao == "removerProduto") {
    $conexao = new Conexao();
    $produto = new Produto();
    $produto->__set("codigo", $_GET['codigo']);

    $produtoService = new ProdutoService($conexao, $produto);
    $produtoService->remover();
    header("Location: /gestao_farmacia/view/home.php?acao=listarProduto");
    exit;

} elseif ($acao == "editarProduto") {
    $conexao = new Conexao();
    $produto = new Produto();
    $produto->__set("nome", $_POST['nome']);
    $produto->__set("validade", $_POST['validade']);
    $produto->__set("qtdestoque", $_POST['qtdestoque']);
    $produto->__set("precounitario", $_POST['precounitario']);
    $produto->__set("codigo", $_GET['codigo']);

    $produtoService = new ProdutoService($conexao, $produto);
    $produtos = $produtoService->editar();
    header("Location: /gestao_farmacia/view/home.php?acao=listarProduto");
    exit;
}


?>