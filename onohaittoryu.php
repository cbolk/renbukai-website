<?php
    setlocale(LC_TIME, 'ita');
    date_default_timezone_set('Europe/Rome');
    include("./utils/class.utils.php");
    include("./utils/class.seminar.php");
    $s = new seminar();
    $s->setSource("./json/seminari.json");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OIR | Associazione Renbukai</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <meta name="description" content="aikido pesaro rimini renbukai jo bokken tanto arti marziali foglietta">
    <meta name="author" content="cbolk">
    <!-- bootstrap -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->

</head>
<body id="onohaittoryu">
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
    		<h3>Onōha Ittō-ryū</h3>
        </div>
        <div class="row">
        	<div class="col-xs-12">
                <blockquote class="blockquote-reverse">Il vero Maestro di spada &egrave; colui che, superati i confini della vittoria e della sconfitta, posa la spada e diviene uomo di pace.</blockquote>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-md-2 col-lg-2">
                <img alt="logo onoha itto ryu" src="./images/oir.gif"/>
            </div>
            <div class="col-xs-8 col-md-10 col-lg-10">                  
                <p>Onoha Ittō Ryū &egrave; riconosciuta come la pi&ugrave; antica tra tante scuole di Kenjutsu che sono nate dagli insegnamenti di Itō Ittōsai Kagehisa, e continua ad essere uno degli stili di kejutsu tradizionale con maggiore influenza sui kata, tattiche e forme del kendo moderno.</p>
                <p>Ono Jirōemon Tadaaki, il successore designato e rinomato uomo di spada, fond&ograve; Onoha, e divenne il Maestro d'armi del secondo e terzo shogun della dinastia Tokugawa, cosa che fu fonte di grande prestigio.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                
                <p>Da allora l'Onoha Ittō Ryū Kenjutsu divenne una delle due scuole di spada ufficiali per la formazione dei samurai dello Shogun formando nel tempo maestri di spada leggendari che lasciarono una profonda impronta nella storia del Giappone.</p>
                <p></p>
                <p>Ai giorni nostri, l'Onoha Ittō Ryū Kenjutsu viene praticato dai massimi esperti di Kendo per tornare alle "origini" e ritrovare lo spirito della spada che si rischia di smarrire con il sopravanzare dell'aspetto sportivo. Inoltre, viene praticato da esperti di altre discipline marziali giapponesi alla ricerca delle origini delle proprie linee di movimento e da cultori della tradizione della spada giapponese anche per il suo carattere di profonda pratica interiore.</p>
    		</div>
        </div>
       <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                 <p>L'attuale caposcuola &egrave; il Sōke Sasamori Takemi, il diciassettesimo Sōke, che ha ereditato la tradizione da suo padre, Sasamori Junzo, e che ha condotto la scuola nel 21esimo secolo.</p>

                 <p>Le regole della scuola contemplano come unico maestro e insegnante, il S&#333;ke, pertanto non &egrave; consentito attivare corsi di insegnamento di Onoha Itto Ryu Kenjutsu al di fuori del <a href='http://www.onohaittoryuitalia.org/Onoha_Itto_Ryu_Italia/Reigakudo.html' target=_blank alt='informazioni Reigakudo'>Reigakudo</a> (Dojo del S&#333;ke).<br/>
                 Tuttavia una concessione speciale da parte del S&#333;ke permette che in Italia, data la distanza, vi siano dei <em>Gruppi di Pratica</em> i cui allenamenti possano essere coordinati da praticanti con maggiore esperienza riconosciuti dal S&#333;ke, tra questi il gruppo di Pesaro. L'orario degli allenamenti &egrave; consultabile <a href='./orario.php' alt="orario">qui</a>.</p>

                 <p>Maggiori informazioni sono disponibili al sito <a href="http://www.onohaittoryuitalia.org" target=_blank>www.onohaittoryuitalia.org</a>.</p>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="acenter pad">
                    <img alt="foto gruppo oir" src="./images/oir1.jpg"/>
                    <p class="notice">Membri del gruppo di pratica di Pesaro, al seminario internazionale con il Sōke Sasamori Takemi, Giugno 2015.</p>
                </div>                
            </div>
        </div>
        <!-- footer -->   
        <?php include_once("utils/footer.php") ?>
    </div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    

    <!-- google tracking -->   
    <?php include_once("utils/analyticstracking.php") ?>

</body>
</html>