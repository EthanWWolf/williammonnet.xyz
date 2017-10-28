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
        <!-- Bootstrap core CSS -->
        <link href="Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Personnal CSS -->
        <link href="Accueil/CSS/stylesheets/style.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <!--<link href="Accueil/CSS/stylesheets/cover.css" rel="stylesheet">-->
    </head>
    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <header class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">William Monnet</h3>
                            <nav class="nav nav-masthead">
                                <a class="nav-link active" href="#">Home</a>
                                <a class="nav-link" href="#">Features</a>
                                <a class="nav-link" href="#">Contact</a>
                            </nav>
                        </div>
                    </header>
                    <main role="main" class="inner cover">
                        <h1 class="cover-heading">Développeur Web sur Toulouse et sa région</h1>
                        <p class="lead">Bienvenue, vous retrouverez ici la liste des projets que j'ai effectué lors de mes diverses missions et formations personnels.</p>
                        <p class="lead">
                          <a href="#project" class="btn btn-lg btn-secondary">En savoir plus</a>
                        </p>
                    </main>
                    <footer class="mastfoot">
                        <div class="inner">
                            <p>Powered by Bootstrap 4</p>
                        </div>
                    </footer>
            </div>
          </div>
        </div>
        <div class="row">
            <article id="project" class="container-fluid row wrapper text-center center-block col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="http://williammonnet.xyz" class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <section>
                        <img src="Accueil/Img/Logo%20Drupal%208.png" alt="Site sous Drupal 8"
                        class="img-fluid">
                        <h3>Mon site sous Drupal 8</h3>
                        <p>En construction</p>
                    </section>
                </a>
                <a href="http://williammonnet.xyz" class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <section>
                        <img src="Accueil/Img/Logo%20Symfony%203.png" alt="Site sous Syphony 3"
                        class="img-fluid">
                        <h3>Mon site sous Syphony 3</h3>
                        <p>En construction</p>
                    </section>
                </a>
                <a href="http://aebgymtoulouse.e-monsite.com/" class="mx-auto col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <section>
                        <img src="Accueil/Img/Site%20AEB%20Gym%20Toulouse.png" alt="Site Aeb Gym"
                        class="img-fluid">
                        <h3>Le site de L'AEB Gym Toulouse</h3>
                    </section>
                </a>
            </article>
            <footer class="container-fluid center-block col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <legend class="container-fluid center-block col-xs-12 col-sm-12 col-md-12 col-lg-12">&laquo; Le développeur est une machine qui transforme du café en code &raquo;</legend>
            </footer>
        </div>
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script>window.jQuery || document.write('<script src="Bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
            <script src="Bootstrap/assets/js/vendor/popper.min.js"></script>
            <script src="Bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="Accueil/JS/script.js" crossorigin="anonymous"></script>
    </body>
</html> 