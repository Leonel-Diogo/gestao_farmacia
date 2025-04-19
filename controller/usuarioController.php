<?php
#INCLUSÃO DE SCRIPTS
require_once "../config/conexao.php";
require_once "../model/usuario.php";
require_once "../model/usuarioService.php";

$usuarios = [];
$acao = isset($_GET["acao"]) ? $_GET["acao"] : $acao;
#echo $acao;

if ($acao == "inserir") {
    $conexao = new Conexao();
    $usuario = new Usuario();

    $usuario->__set("nome", $_POST['nome']);
    $usuario->__set("email", $_POST['email']);
    $usuario->__set("senha", $_POST['senha']);
    $usuario->__set("tipo", $_POST['tipo']);
    $usuario->__set("telefone", $_POST['telefone']);
    $usuario->__set("endereco", $_POST['endereco']);

    $usuarioService = new UsuarioService($conexao, $usuario);
    $usuarioService->inserir();
    header("location: ../view/home.php?acao=listar");
    exit;

} elseif ($acao == "listar") {
    $conexao = new Conexao();
    $usuario = new Usuario();

    $usuarioService = new UsuarioService($conexao, $usuario);
    $usuarios = $usuarioService->listar();

} elseif ($acao == "remover") {
    $conexao = new Conexao();
    $usuario = new Usuario();
    $usuario->__set("id", $_GET['id']);
    $usuarioService = new UsuarioService($conexao, $usuario);
    $usuarioService->remover();

    header("location: ../view/home.php?acao=listar");
    exit;
} elseif ($acao == "editar") {
    $conexao = new Conexao();
    $usuario = new Usuario();

    $usuario->__set("nome", $_POST['nome']);
    $usuario->__set("email", $_POST['email']);
    $usuario->__set("senha", $_POST['senha']);
    $usuario->__set("tipo", $_POST['tipo']);
    $usuario->__set("telefone", $_POST['telefone']);
    $usuario->__set("endereco", $_POST['endereco']);
    $usuario->__set("id", $_GET['id']);

    $usuarioService = new UsuarioService($conexao, $usuario);
    $usuarios = $usuarioService->editar();
    header("location: ../view/home.php?acao=listar");
    exit;
}