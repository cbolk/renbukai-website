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

<body id="aikido">
	<div class="container">
        <div id="headernomobile" class="nomobile col-lg-12">
            <?php include('./utils/head_banner.php'); ?>
        </div>
        <div class="header clearfix">
            <div id="mmenu"><?php include('./utils/menumobile.php'); ?></div>
            <div id="smenu"></div>          
        </div>
        <div id="headermobile" class="mobile">
            <?php include('./utils/head_banner.php'); ?>
        </div>
       	<div class="row">
       		<h3>Aikido</h3>
       	</div>
        	<div class="col-xs-8">
            <p>L'Aikido è un'arte marziale tradizionale giapponese creata dal fondatore, dal Maestro Morihei Ueshiba (1883-1969) come disciplina del corpo, della mente e dello spirito.</p>
            <p>L'ideogramma Dō (道) che compare nel nome dell'Arte si può infatti tradurre con Via, cammino spirituale, mentre Ai (合) significa Armonia e Ki (気) energia, spirito.</p>
            <p>L'Aikido &egrave; stato creato durante gli anni '20: il Maestro Morihei Ueshiba era un esperto ai massimi livelli delle arti marziali giapponesi. L'arte marziale consiste nel fondersi con il movimento di chi attacca e nel ridirigere la sua forza piuttosto che farvi resistenza. 
            <p>Dopo la morte del fondatore, suo figlio Kisshomaru Ueshiba &egrave; stato nominato Aikido Doshu. L'attuale Aikido Doshu &egrave; Moriteru Ueshiba, che &egrave; succeduto al padre.
            </div>
            <div class="col-xs-4">
            <img src='http://www.aikikai.or.jp/eng/images/aikido/logo.gif' />
            <p class="notice">(dal sito dell'Aikikai Giappone - www.aikikai.or.jp)</p>
            </div>
            <div class="col-xs-12">
                 <p>L'Aikido Renbukai &egrave; una scuola di Aikido che svolge la propria attivit&agrave; presso due d&#333;j&#333;, uno a <a href="./aikidopesaro.php">Pesaro</a> e l'altro a <a href="./aikidorimini.php">Rimini</a>.</p>
                <p>Il responsabile &egrave; il Maestro <a href="./insegnante.php">Roberto Foglietta</a>, 6&deg; dan Aikikai d'Italia e Aikikai Tokyo.</p>
                <div class="notice">Scuola affiliata all'Associazione di Cultura Tradizionale Giapponese <span class="iphone">  </span><a href="http://www.aikikai.it" title="sito web dell'aikikai d'Italia" target="_blank">Aikikai d'Italia</a> - Ente Morale (D.P.R. luglio 1978 n. 528)</div>
            </div>

	</div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
</body>
</html>