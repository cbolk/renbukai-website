<?php
    setlocale(LC_TIME, 'ita');
    date_default_timezone_set('Europe/Rome');
    include("./utils/class.utils.php");
    include("./utils/class.seminar.php");
    $s = new seminar();
    $s->setSource("./seminari.json");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>associazione renbukai - dojo</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
</head>
<body id="dojo">
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
            <h3><a name="aa"></a>corsi</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <p>L'Aikido Renbukai &egrave; una scuola di Aikido che svolge la propria attivit&agrave; 
                presso due dojo, uno a <a href='./aikidopesaro.php'>Pesaro <i class="pesaro fa fa-map-marker"></i></a> e 
                l'altro a <a href='aikidorimini.php'>Rimini <i class="rimini fa fa-map-marker"></i></a>. In entrambi le sedi ci sono corsi per tutte le et&agrave; ed in base alla propria preparazione. I corsi offerti sono per:
                <ul>
                <li><strong>bambini</strong> (solo a Rimini) - con et&agrave; compresa tra i 4 e i 10 anni - nel periodo settembre-giugno,</li>
                <li><strong>ragazzi</strong> - con et&agrave; compresa tra gli 11 e i 14 anni  - nel periodo settembre-giugno,</li>
                <li><strong>principianti</strong> - coloro che non hanno mai praticato Aikido - nel periodo settembre-giugno,</li>
                <li><strong>adulti</strong> - tutto l'anno.</li>
                </ul>
                </p>
                <p>Prima di cominciare &egrave; possibile assistere a tutte le lezioni che si desidera, ed &egrave; comunque possibile fare una lezione di prova.</p>
                <p>L'inserimento nel corso principianti pu&ograve; avvenire durante tutto l'anno: inizialmente verrete affiancati individualmente per poter raggiungere il livello di coloro che hanno iniziato a settembre.</p>
                <p>&Egrave; possibile frequentare in qualsiasi orario e sede, in base al proprio livello.</p>

            </div>       
            <div class="col-lg-6 col-xs-12">
                 <img src='./images/dojoP.jpg' />
                 <p class="notice">il dojo di <a href='./aikidopesaro.php'>Pesaro</a></p>
            </div>
        </div> 
        <div class="row">
            <div class="col-xs-12">
                <p>Per iscriversi sono necessari:
                            <ul class='bullet'>
                                <li>2 fototessera;</li>
                                <li>certificato medico per attivit&agrave; non agonistica in originale;</li>
                                <li>codice fiscale;</li>
                                <li>attestato di versamento in favore dell'Aikikai d'Italia che comprende
                                    l'assicurazione infortuni (il bollettino precompilato &egrave; <em>disponibile in Dojo</em>)
                                        <!--ul class='bullet2'>
                                            <li>adulti: 35 &euro;</li>
                                            <li>yudansha: 45 &euro;</li>
                                            <li>ragazzi fino a 14 anni: 21 &euro;</li>
                                        </ul-->
                                </li>
                            </ul>
            </p>
            <p>Se desiderate ulteriori informazioni, venite a trovarci in dojo, durante le lezioni, oppure <a href='./contatti.php'>contattateci</a>.</p>
             <p>Nelle pagine dedicate ai due dojo (<a href='./aikidopesaro.php'>Pesaro <i class="pesaro fa fa-map-marker"></i></a> e 
                 <a href='aikidorimini.php'>Rimini <i class="rimini fa fa-map-marker"></i></a>) trovate gli orari specifici degli allenamenti e come raggiungerci, mentre l'orario completo &egrave; consultabile <a href='./orario.php'>qui</a>.</p>
    		</div>
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
</body>
</html>