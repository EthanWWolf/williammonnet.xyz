<?php
    header('Content-Type: text/html; charset=utf-8');
    $host = $_SERVER['HTTP_HOST'];
    setlocale(LC_TIME, "fr_FR.utf8");
    date_default_timezone_set('Europe/Paris');
?>
<html>
    <head>
        <!--[if IE]>
          <link href="Accueil/CSS/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Bienvenue | William Monnet</title>
        <?php 
            wp_head();
        ?>
        <!-- Bootstrap core CSS -->
        <!--<link href="wp-content/themes/WMWP/Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
        <!-- Personnal CSS -->
        <!--<link href="wp-content/themes/WMWP/style.css" media="screen, projection" rel="stylesheet" type="text/css" />-->
    </head>

    <body>
        <nav id="Nav" class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink">
            <a class="navbar-brand js-scroll-trigger" href="williammonnet.xyz">William Monnet</a>
            <div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#project">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#social_network">Réseau Sociaux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>