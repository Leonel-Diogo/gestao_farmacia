<?php
#TOPO DO DASHBOARD
require_once "componentes/header.php";

#SCRIPTS DE CONFIGURAÇÃO DE USUARIO
require_once('../config/conexao.php');
require_once "../model/usuario/usuario.php";
require_once "../model/usuario/usuarioService.php";
#SCRIPTS DE CONFIGURAÇÃO DE PRODUTOS
require_once('../model/produto/produto.php');
require_once('../model/produto/produtoService.php');
#SCRIPTS DE CONFIGURAÇÃO DE CATEGORIA
require_once('../model/categoria/categoria.php');
require_once('../model/categoria/categoriaService.php');

#CONTEÚDO
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == "bemvindo") {
        require_once "componentes/cards.php";
    } #USUÁRIOS
    elseif ($acao == "inserirUsuario") {
        require_once "paginas/usuario/cadastrar_usuario.php";
        exit;
    } elseif ($acao == "listarUsuario") {
        require_once "paginas/usuario/listar_usuario.php";
        exit;
    } elseif ($acao == "removerUsuario") {
        require_once "paginas/usuario/listar_usuario.php";
        exit;
    } elseif ($acao == "editarUsuario") {
        $conexao = new Conexao();
        $usuario = new Usuario();
        $usuario->__set("id", $_GET['id']);

        $usuarioService = new UsuarioService($conexao, $usuario);
        $usuarios = $usuarioService->buscarId();
        require_once "paginas/usuario/editar_usuario.php";
        exit;
    }#CATEGORIA
    elseif ($acao == "inserirCategoria") {
        require_once "paginas/categoria/cadastrar_categoria.php";
        exit;
    } elseif ($acao == "listarCategoria") {
        require_once "paginas/categoria/listar_categoria.php";
        exit;
    } elseif ($acao == "removerCategoria") {
        require_once "paginas/categoria/listar_categoria.php";
        exit;
    }
    #PRODUTOS
    elseif ($acao == "inserirProduto") {
        require_once "paginas/produto/cadastrar_produto.php";
        exit;
    } elseif ($acao == "listarProduto") {
        require_once "paginas/produto/listar_produto.php";
        exit;
    } elseif ($acao == "removerProduto") {
        require_once "paginas/produto/listar_produto.php";
        exit;
    } elseif ($acao == "editarProduto") {
        $conexao = new Conexao();
        $produto = new Produto();
        $produto->__set("codigo", $_GET['codigo']);

        $produtoService = new ProdutoService($conexao, $produto);
        $produtos = $produtoService->buscarId();
        require_once "paginas/produto/editar_produto.php";
        exit;
    } elseif ($acao == "editarCategoria") {
        $categorias = [];

        $conexao = new Conexao();
        $categoria = new Categoria();
        $categoria->__set("id", $_GET['id']);

        $categoriaService = new CategoriaService($conexao, $categoria);
        $categorias = $categoriaService->buscarId();
        require_once "paginas/categoria/editar_categoria.php";

    }
}
#FOOTER
require_once "componentes/footer.php";
?>