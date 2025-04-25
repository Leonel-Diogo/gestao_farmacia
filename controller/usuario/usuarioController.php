<?php
#INCLUSÃO DE SCRIPTS
require_once(__DIR__ . '/../../config/conexao.php');
require_once(__DIR__ . '/../../model/usuario/usuario.php');
require_once(__DIR__ . '/../../model/usuario/usuarioService.php');

$usuarios = [];
$acao = isset($_GET["acao"]) ? $_GET["acao"] : $acao;

if ($acao == "inserirUsuario") {
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
    #header("location: ../../view/home.php?acao=listarUsuario");
    header("Location: /gestao_farmacia/view/home.php?acao=listarUsuario");
    exit;

} elseif ($acao == "listarUsuario") {
    $conexao = new Conexao();
    $usuario = new Usuario();

    $usuarioService = new UsuarioService($conexao, $usuario);
    $usuarios = $usuarioService->listar();

} elseif ($acao == "removerUsuario") {
    $conexao = new Conexao();
    $usuario = new Usuario();
    $usuario->__set("id", $_GET['id']);
    $usuarioService = new UsuarioService($conexao, $usuario);
    $usuarioService->remover();

    #header("location: ../../view/home.php?acao=listarUsuario");
    header("Location: /gestao_farmacia/view/home.php?acao=listarUsuario");
    exit;
} elseif ($acao == "editarUsuario") {
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
    #header("location: ../../view/home.php?acao=listarUsuario");
    header("Location: /gestao_farmacia/view/home.php?acao=listarUsuario");
    exit;
}