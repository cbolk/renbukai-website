<?php 
	setlocale(LC_TIME, 'ita');
	date_default_timezone_set('Europe/Rome');
    include("./utils/class.utils.php");
    include("./utils/class.gallery.php");
    include("./utils/class.seminar.php");
    $gallery = new gallery();
    $util = new utils();
    $s = new seminar();
    $s->setSource("./seminari.json");

    function sort_by_date($a, $b) {
        $dA = strtotime($a['data']);
        $dB = strtotime($b['data']);

        return $dB - $dA;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>aikido</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
</head>

<body id="photo">
	<div class="container">
        <div class="nomobile">
            <?php include('./utils/head_banner.php'); ?>
        </div>
        <div class="header clearfix">
            <?php include('./utils/menumobile.php'); ?>
        </div>
        <div class="mobile">
            <?php include('./utils/head_banner.php'); ?>
        </div>
        	<div class="row">
        		<h3>Aikido Renbukai</h3>
        	</div>
        	<div class="col-xs-12">
                 <p>L'Aikido Renbukai &egrave; una scuola di Aikido che svolge la propria attivit&agrave; presso due d&#333;j&#333;, uno a <a href="./aikidopesaro.php">Pesaro</a> e l'altro a <a href="./aikidorimini.php">Rimini</a>.</p>
                <p>Il responsabile &egrave; il Maestro <a href="./insegnante.php">Roberto Foglietta</a>, 6&deg; dan Aikikai d'Italia e Aikikai Tokyo.</p>
                <p class='push'>&nbsp;</p>
                <div class="notice">Scuola affiliata all'Associazione di Cultura Tradizionale Giapponese <span class="iphone">  </span><a href="http://www.aikikai.it" title="sito web dell'aikikai d'Italia" target="_blank">Aikikai d'Italia</a> - Ente Morale (D.P.R. luglio 1978 n. 528)</div>
            </div><!-- generic-page -->

	</div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
</body>
</html>