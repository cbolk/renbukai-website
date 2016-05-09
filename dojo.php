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
            <h3>dojo</h3>
        </div>
        <div class="col-xs-12">
            L'Aikido Renbukai &egrave; una scuola di Aikido che svolge la propria attivit&agrave; 
            presso due d&#333;j&#333;, uno a <a href='./aikidopesaro.php'>Pesaro <i class="pesaro fa fa-map-marker"></i></a> e 
            l'altro a <a href='aikidorimini.php'>Rimini <i class="rimini fa fa-map-marker"></i></a>. Nelle pagine dedicate dei due d&#333;j&#333; trovate
            gli orari specifici degli allenamenti e come raggiungerci.
		</div>
        <div class="col-xs-12">
              <p>Per iscriversi, presentarsi durante gli orari di lezione, portando:
                    <ul class='bullet'>
     			        <li>2 fototessera;</li>
     					<li>certificato medico per attivit&agrave; non agonistica in originale;</li>
     					<li>codice fiscale;</li>
     					<li>attestato di versamento in favore dell'Aikikai d'Italia che comprende
     						l'assicurazione infortuni (<em>disponibile in D&#333;j&#333;</em>)
     							<ul class='bullet2'>
     								<li>adulti: 35 &euro;</li>
									<li>yudansha: 45 &euro;</li>
									<li>ragazzi fino a 14 anni: 21 &euro;</li>
  							    </ul>
     					</li>
     				</ul>
            </p>
        	<p>Quota mensile (accesso alle lezioni sia di Rimini che di Pesaro)
     			    <ul class="bullet">
                        <li><em>bambini e ragazzi</em>: 250 &euro; (da ottobre a maggio)</li>
                        <li><em>adulti</em>
     							<ul class="bullet2">
     								<li>1 mese: 60 &euro;</li>
     								<li>3 mesi: 165 &euro;</li>
     								<li>6 mesi: 315 &euro;</li>
     								<li>1 anno: 530 &euro; (da settembre a luglio)</li>
     							</ul>
     							</li>
     						</ul>
     				</p>
     			<p>Quota giornaliera ("tatami fee"): 5 &euro;</p>
    	</div>
        <div class="clearfix mobile">&nbsp;</div>
            <footer class="footer mobile">
                <div class="container acenter">
                <p class="text-muted"><img src="./assets/footer.png" alt=""></p>
                </div>
             </footer>
        </div>
    </div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
</body>
</html>