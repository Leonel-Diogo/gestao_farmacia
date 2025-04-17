<?php
#TOPO DO DASHBOARD
require_once "componentes/header.php";


#CONTEÚDO
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == "bemvindo") {
        #CARDS
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
    } /**/
}
#FOOTER
require_once "componentes/footer.php";
?>