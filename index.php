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
        <div id="cover" class="cover row">
            <a href="#suite" aria-hidden="true">
            </a>
        </div>
        <article data-spy="scroll" data-target="#myNavbar" id="suite" class="presentation row">
            <h1>Développeur Web sur Toulouse et sa région</h1>
            <p>Bienvenue, vous retrouverez ici la liste des projets que j'ai effectué lors de mes diverses missions et formations personnels.</p>
            <section id="tripoint" class="container-fluid row tripoint col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xd-12 col-sm-12 col-md-12 col-lg-4">
                    <p class="disponibilite" aria-hidden="true"></p>
                    <h4>Disponibilité</h4>
                    <p>Je suis disponible immédiatement.</p>
                </div>
                <div class="col-xd-12 col-sm-12 col-md-12 col-lg-4">
                    <p class="toutprojet" aria-hidden="true"></p>
                    <h4>Projet</h4>
                    <p>Tout type de projet est susceptible de m'intéresser, quelque soit le secteur.</p>
                </div>
                <div class="col-xd-12 col-sm-12 col-md-12 col-lg-4">
                    <p class="formation" aria-hidden="true"></p>
                    <h4>Formation</h4>
                    <p>Openclassroom me permettant de rester à jour et de monter en compétence.</p>
                </div>
            </section>
            <section id="project" class="container-fluid row projet col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="http://williammonnet.xyz" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="Accueil/Img/Logo%20Drupal%208.png" alt="Projet sous Drupal 8" class="img-fluid">
                    <section>
                        <div>
                            <h3>Mon projet sous Drupal 8</h3>
                            <p>En construction</p>
                        </div>
                    </section>
                </a>
                <a href="http://williammonnet.xyz" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="Accueil/Img/Logo%20Symfony%203.png" alt="Projet sous Syphony 3" class="img-fluid">
                    <section>
                        <div>
                            <h3>Mon projet sous Symphony 3</h3>
                            <p>En construction</p>
                        </div>
                    </section>
                </a>
                <a href="http://aebgymtoulouse.e-monsite.com/" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="Accueil/Img/Site%20AEB%20Gym%20Toulouse.png" alt="Site Aeb Gym" class="img-fluid">
                    <section>
                        <div>
                            <h3>Le site de L'AEB Gym Toulouse</h3>
                        </div>
                    </section>
                </a>
            </section>
            <section  id="social_network" class="row container-fluid social-network-container col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>Retrouvez-moi sur les réseau sociaux</h2>
                <div class="row social-network">
                    <a href="https://www.linkedin.com/in/williammonnet/" class="col-sm-4 col-md-4">
                        <p class="linkedin" aria-hidden="true"></p>
                        <p>Linkedin</p>
                    </a>
                    <a href="https://stackoverflow.com/users/8806715/william-monnet" class="col-sm-4 col-md-4">
                        <p class="stackoverflow" aria-hidden="true"></p>
                        <p>Stackoverflow</p>
                    </a>
                    <a href="https://twitter.com/EthanWWolf" class="col-sm-4 col-md-4">
                        <p class="twitter" aria-hidden="true"></p>
                        <p>Twitter</p>
                    </a>
                </div>
            </section>
            <section id="contact" class="row container-fluid contact-container col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2 >Restons en contact !</h2>
                <p>Envie de travailler avec moi? Appelez-moi ou envoyez-moi un courriel et je vous répondrais dans les plus brefs délais.</p>
                <div class="row contact">
                    <div class="contact-left col-xd-12 col-sm-12 col-md-12 col-lg-6">
                        <p class="phone" aria-hidden="true"></p>
                        <p>06 65 30 63 09</p>
                    </div>
                    <div class="contact-right col-xd-12 col-sm-12 col-md-12 col-lg-4">
                        <p class="mail" aria-hidden="true"></p>
                        <a href="mailto:monnetwilliam@gmail.com">monnetwilliam@gmail.com</a>
                    </div>
                </div>
            </section>
        </article>
        <footer class="row footer container-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <legend class="container-fluid center-block  col-sm-12 col-lg-12">&laquo; Le développeur est une machine qui transforme du café en code &raquo;</legend>
        </footer>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="Bootstrap/assets/js/vendor/popper.min.js"></script>
        <script src="Bootstrap/dist/js/bootstrap.js"></script>
        <script src="Accueil/JS/script.js" crossorigin="anonymous"></script>
    </body>

    </html>