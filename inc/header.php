<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Liga Universitária de E-Sports</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

    <!-- CSS Base de todas as páginas -->
    <link href="css/base.css" rel="stylesheet">

    <!-- CSS da página atual -->
    <?php
        // Pega o nome da página atual
        $pagina = basename($_SERVER['PHP_SELF'],'.php');
        // Adiciona o arquivo css de acordo
        if($pagina == "index"){
            echo '<link href="css/home.css" rel="stylesheet">';
        }else if($pagina == "acompanhe"){
            echo '<link href="css/acompanhe.css" rel="stylesheet">';
        }

    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--Header -->
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-fixed-top navbar-inverse menu-superior">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Logo da LUE" src="img/LUE_logoBranco.png">
                    </a>
                </div>-->
                <a href="index.php" class="navbar-brand">
                    <img class="img-logo img-responsive" src="img/LUE_logoBranco.png" alt="Logo da LUE">
                </a>
            </div>
            <div id="barra-navegacao" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                      <li><a href="index.php">HOME</a></li>
                      <li><a href="index.php#edicoes-anteriores">EDIÇÕES ANTERIORES</a></li>
                      <li><a href="index.php#nosso-time">NOSSO TIME</a></li>
                      <li><a href="index.php#midia">MÍDIA</a></li>
                      <li><a href="index.php#contato">CONTATO</a></li>
                      <li class="btn-acompanhe"><div class="texto-acompanhe"><a href="acompanhe.php">ACOMPANHE</a></div></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container-carousel">
        <div id="carousel">
            <div><img src="img/carousel/carousel01.png" class="img-responsive"></div>
            <div><img src="img/carousel/carousel02.png" class="img-responsive"></div>
            <div><img src="img/carousel/carousel03.png" class="img-responsive"></div>
            <div><img src="img/carousel/carousel04.png" class="img-responsive"></div>
            <div><img src="img/carousel/carousel05.png" class="img-responsive"></div>
        </div> <!-- carousel -->
        <div class="divisoria-topo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-responsive" src="img/divisoriaTopo.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
