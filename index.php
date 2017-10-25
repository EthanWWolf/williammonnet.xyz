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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="Accueil/CSS/stylesheets/style.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="Accueil/JS/script.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <header class="title container-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 href="#" class="">William Monnet</h1>
            <h2>Développeur Web sur Toulouse et sa région</h2>
        </header>
        <article class="container-fluid row wrapper text-center center-block col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p class="text-center">Bienvenue, vous retrouverez ici la liste des projets que j'ai effectué lors de mes diverses missions et formations personnels.</p>
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
</body>
</html> 