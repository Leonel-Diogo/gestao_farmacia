<?php ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Gestão | Farmácia</title>

    <!-- estilos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS CUSTOMIZADO (ajustado) -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/customized.css">

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- BOOTSTRAP ICON -->
    <!-- JS CUSTOMIZADO (ajustado) -->
    <script src="../assets/js/script.js"></script>
</head>

<body>

    <!-- menu -->
    <div class="nav-side-menu">
        <div class="brand">Gestão | Farmácia</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="home.php?acao=bemvindo"><i class="fa fa-tachometer-alt sidebar-icon"></i> Dashboard</a>
                </li>

                <li data-toggle="collapse" data-target="#ajuda" class="collapsed">
                    <a href="home.php?acao=listarUsuario"><i class="fa fa-user-cog sidebar-icon"></i> Usuários
                        <span class="arrow"><i class="fa fa-angle-down"></i></spam></a>
                    <!--<ul class="sub-menu collapse" id="ajuda">
                    <li><a href="#" id="documentacao"><i class="fa fa-angle-right"></i> Clientes</a></li>
                    <li><a href="#" id="suporte"><i class="fa fa-angle-right"></i> Farmaceuticos <small><i
                                    class="fa fa-external-link"></i></small></a></li>
                </ul>-->
                </li>
                <li data-toggle="collapse" data-target="#ajuda" class="collapsed">
                    <a href="home.php?acao=listarProduto"><i class="fa fa-notes-medical sidebar-icon"></i>Produtos
                        <span class="arrow"><i class="fa fa-angle-down"></i></spam></a>
                </li>

            </ul>
        </div>
    </div>

    <!-- paginas -->
    <div class="main" id="pagina">

        <div class="container">

            <div class="row">
                <div class="col">

                    <form>
                        <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Competência:</label>
                            <div class="col-sm-3">
                                <select class="form-control-plaintext" id="competencia">
                                    <option value="">-- Selecione </option>
                                    <option value="2018-08">Agosto / 2018</option>
                                    <option value="2018-09">Setembro / 2018</option>
                                    <option value="2018-10">Outubro / 2018</option>
                                </select>
                            </div>
                        </div>
                    </form>

                    <hr />

                </div>
            </div>