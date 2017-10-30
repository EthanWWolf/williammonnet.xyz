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
    </head>

    <body>
        <nav class=" navbar navbar-expand-lg navbar-light fixed-top navbar-shrink">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">William Monnet</a>
            <div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <!--<li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#project">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="cover row">
            <a href="#project" aria-hidden="true">
            </a>
        </div>
        <div id="project" class="row">
            <h1>Développeur Web sur Toulouse et sa région</h1>
            <p>Bienvenue, vous retrouverez ici la liste des projets que j'ai effectué lors de mes diverses missions et formations personnels.</p>
            <article class="container-fluid row wrapper text-center center-block col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="http://williammonnet.xyz" class="col-sm-6 col-lg-4">
                    <img src="Accueil/Img/Logo%20Drupal%208.png" alt="Site sous Drupal 8" class="img-fluid">
                    <section>
                        <div>
                            <h3>Mon site sous Drupal 8</h3>
                            <p>En construction</p>
                        </div>
                    </section>
                </a>
                <a href="http://williammonnet.xyz" class="col-sm-6 col-lg-4">
                    <img src="Accueil/Img/Logo%20Symfony%203.png" alt="Site sous Syphony 3" class="img-fluid">
                    <section>
                        <div>
                            <h3>Mon site sous Symphony 3</h3>
                            <p>En construction</p>
                        </div>
                    </section>
                </a>
                <a href="http://aebgymtoulouse.e-monsite.com/" class="col-sm-6 col-lg-4">
                    <img src="Accueil/Img/Site%20AEB%20Gym%20Toulouse.png" alt="Site Aeb Gym" class="img-fluid">
                    <section>
                        <div>
                            <h3>Le site de L'AEB Gym Toulouse</h3>
                        </div>
                    </section>
                </a>
            </article>   
            <article id="contact" class="container-fluid contact-container col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2 >Restons en contact !</h2>
                <p>Envie de travailler avec moi? Appelez-moi ou envoyez-moi un courriel et je vous répondrais dans les plus brefs délais.</p>
                <div class="row contact">
                    <div class="contact-left col-sm-12 col-md-6">
                        <p class="phone" aria-hidden="true"></p>
                        <p>06 65 30 63 09</p>
                    </div>
                    <div class="contact-right col-sm-12 col-md-6">
                        <p class="mail" aria-hidden="true"></p>
                        <a href="mailto:monnetwilliam@gmail.com">monnetwilliam@gmail.com</a>
                    </div>
                </div>
            </article>
            <footer class="container-fluid center-block col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <legend class="container-fluid center-block col-xs-12 col-sm-12 col-md-12 col-lg-12">&laquo; Le développeur est une machine qui transforme du café en code &raquo;</legend>
            </footer>
        </div>
        <!-- Bootstrap core JavaScript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="Bootstrap/assets/js/vendor/jquery.min.js"><\/script>')
        </script>
        <script src="Bootstrap/assets/js/vendor/popper.min.js"></script>
        <script src="Bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="Accueil/JS/script.js" crossorigin="anonymous"></script>
    </body>

    </html>