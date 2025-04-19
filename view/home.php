<?php
#TOPO DO DASHBOARD
require_once "componentes/header.php";

#SCRIPTS DE CONFIG EM FUNÇÃO DA EDIÇÃO
require_once "../config/conexao.php";
require_once "../model/usuario.php";
require_once "../model/usuarioService.php";


#CONTEÚDO
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == "bemvindo") {
        require_once "componentes/cards.php";
    } elseif ($acao == "inserir") {
        require_once "paginas/cadastrar_usuario.php";
        exit;
    } elseif ($acao == "listar") {
        require_once "paginas/listar_usuario.php";
        exit;
    } elseif ($acao == "remover") {
        require_once "paginas/listar_usuario.php";
        exit;
    } elseif ($acao == "editar") {
        $conexao = new Conexao();
        $usuario = new Usuario();
        $usuario->__set("id", $_GET['id']);

        $usuarioService = new UsuarioService($conexao, $usuario);
        $usuarios = $usuarioService->buscarId();
        require_once "paginas/editar_usuario.php";
        exit;
    }
}
#FOOTER
require_once "componentes/footer.php";
?>