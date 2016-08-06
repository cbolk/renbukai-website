<?php 
	setlocale(LC_TIME, 'ita');
	date_default_timezone_set('Europe/Rome');
    include("./utils/class.utils.php");
    include("./utils/class.gallery.php");
    include("./utils/class.seminar.php");
    $gallery = new gallery();
    $util = new utils();
    $s = new seminar();
    $s->setSource("./json/seminari.json");

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
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
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
       		<h3>Aikido&nbsp;&nbsp;&nbsp;合気道</h3>
       	</div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-12">
            <img src='http://www.aikikai.or.jp/eng/images/aikido/logo.gif' />
            <p class="notice">(dal sito dell'<a href='www.aikikai.or.jp' target=_blank>Aikikai Giappone</a>)</p>
            </div>
        	<div class="col-lg-6 col-md-6 col-xs-12">
            <p>L'Aikido &egrave; un'arte marziale tradizionale giapponese non competitiva sviluppata negli anni '20 da Morihei Ueshiba (1883-1969) come disciplina del corpo, della mente e dello spirito.</p>
            <p>L'ideogramma Dō (道) che compare nel nome dell'Arte si pu&ograve; infatti tradurre con Via, cammino spirituale, mentre Ai (合) significa Armonia e Ki (気) energia, spirito.</p>
            <p>Il Maestro Morihei Ueshiba (cui ci si riferisce anche con il termine di O Sensei, il grande Maestro) era un esperto ai massimi livelli delle arti marziali giapponesi classiche, da cui il fondatore ha tratto ispirazione, arricchendo la disciplina di movimenti flessibili, razionali e molto efficaci. Il principio base dell'Aikido &egrave; quello di evadere e ridirigere la forza di chi attacca, invece che 
            farvi resistenza.</p>
            <p>Il fondatore ha introdotto l'Aikido come una via "banyu-aigo (amore per tutte le cose in natura)", dopo aver maturato dei dubbi riguardo alle arti marziali che permettono di sviluppare solamente delle abilit&agrave; legate al combattimento, il cui fine ultimo &egrave; sconfiggere l'avversario.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
            <img src='http://www.aikikai.or.jp/eng/images/aikido/img_history_1.jpg' />
            <p class="notice">Morihei Ueshiba, fondatore dell'Aikido</p>
            </div>
        </div>
        <div class="row">            
            <div class="col-lg-3 col-md-3 col-xs-12">
                    <img src='http://www.aikikai.or.jp/eng/images/aikido/img_history_2.jpg' />
                    <p class="notice">Kisshomaru Ueshiba, secondo Doshu.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <p>Dopo la morte del fondatore, suo figlio Kisshomaru Ueshiba viene nominato Aikido Doshu.<br/>
                Attualmente Moriteru Ueshiba &egrave; Aikido Doshu, succeduto al padre.</p>
                <p>L'Aikikai Foundation Aikido Honbu Dojo si trova a Tokyo, dove il Doshu ed altri Maestri fanno lezione quotidianamente, e dove i Maestri italiani sono andati e vanno a praticare e studiare per periodi pi&ugrave; meno lunghi.</p>            
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                    <img src='http://www.aikikai.or.jp/eng/images/aikido/img_history_3.jpg' />
                    <p class="notice">L'attuale Doshu</p>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                    <img src='http://www.ueshibaaikido.org/Images/Images/Doshu/doshu.jpg' />
                    <p class="notice">Il Doshu presso l'Honbu Dojo,<br/>foto tratte dal sito dell'<a href='www.aikikai.or.jp' target=_blank>Aikikai Giappone</a>.</p>
                    
            </div>
        </div>
        <div class="row">            
            <div class="col-lg-12 col-xs-12">
            <p>In Italia, l'Associazione di Cultura Tradizionale Giapponese (<a href="http://www.aikikai.it" title="sito web dell'aikikai d'Italia" target="_blank">Aikikai d'Italia</a>), cui &egrave; affiliata l'Associazione Renbukai, &egrave; guidata dal Maestro Tada e riunisce centinaia di scuole di Aikido.</p>
                <p>La pratica dell'Aikido ha come finalit&agrave; migliorare lo stato fisico e mentale, in base alle proprie capacit&agrave;. &Egrave; un'attivit&agrave; ideale non solo per la salute ma anche per lo sviluppo di una propria consapevolezza, ed &egrave; per questo adatta a chiunque, indipendentemente dall'et&agrave; e dal sesso.</p>            
            </div>
        </div>
        <div class="row">            
                <div class="notice">Scuola affiliata all'Associazione di Cultura Tradizionale Giapponese <span class="iphone">  </span><a href="http://www.aikikai.it" title="sito web dell'aikikai d'Italia" target="_blank">Aikikai d'Italia</a> - Ente Morale (D.P.R. luglio 1978 n. 528)</div>
        </div>
        <div class="clearfix mobile">&nbsp;</div>
        <footer class="footer mobile">
            <div class="container acenter">
                <p class="text-muted"><img src="./assets/footer.png" alt=""></p>
            </div>
        </footer>
    </div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
    <!-- google tracking -->   
    <?php include_once("utils/analyticstracking.php") ?>
</body>
</html>