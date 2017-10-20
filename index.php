<?php
    header('Content-Type: text/html; charset=utf-8');
    $host = $_SERVER['HTTP_HOST'];
    setlocale(LC_TIME, "fr_FR.utf8");
    date_default_timezone_set('Europe/Paris');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liste Projet William Monnet</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="../Accueil/CSS/style.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../Accueil/JS/script.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="col-lg-12">
        <h1>William Monnet</h1>
        <h2>Développeur Web sur Toulouse et sa région</h2>
    </div>
    <div class="col-lg-12">
        <a href="http://williamonnet.xyz">
            <div class="col-lg-6">
                <img src="" alt="Site sous Drupal 8">
                <h3>Bienvenue sur mon site Drupal 8</h3>
                <p>En construction</p>
            </div>
        </a>
        <a href="http://williamonnet.xyz">
            <div class="col-lg-6">
                <img src="" alt="Site sous Syphony 3">
                <h3>Bienvenue sur mon site Syphony 3</h3>
                <p>En construction</p>
            </div>
        </a>
        <a href="http://aebgymtoulouse.e-monsite.com/">
            <div class="col-lg-6">
                <img src="" alt="Site Aeb Gym">
                <h3>Le site de L'AEB Gym Toulouse</h3>
            </div>
        </a>
    </div>
    <footer>
    </footer>
</body>
</html> 