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
    <title>associazione renbukai - insegnante</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="jumbotron-narrow.css" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->

</head>
<body id="insegnante">
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
        	<div class="col-xs-12">
        		<h3>M&deg; Roberto Foglietta</h3>
        	</div>
        </div>
        <div class="row">
        	<div class="col-xs-12 col-sm-4 col-lg-4 ">
              	<div class="acenter pad"><img src="./images/rf01.jpg"/></div>
        	</div>
        	<div class="col-xs-12 col-sm-8 col-lg-8">
        		<p>Il M&deg; Roberto Foglietta (6&deg; dan Aikikai Italia/Aikikai Tokyo) &egrave; nato ad Urbino il 12 aprile 1954, 
                e nel 1976 inizia la pratica di Aikido con il M&deg; Marcolini Romeo (3&deg; dan) e poi con il M&deg; Romagnoli 
                Ezechiele (3&deg; dan), dopo aver iniziato a praticare Judo con il M&deg; Romagnoli Ezechiele (5&deg; dan Judo) e 
                Tae Kwon Do con il M&deg; Chung Kwang Soo (9&deg; dan).</p>
                <p>Nell'estate del 1977 frequenta il suo primo seminario di Coverciano dove conosce il M&deg; Tada Hiroshi (9&deg; Aikikai, Shihan),
                il M&deg; Fujimoto Yogi (8&deg; Aikikai, Shihan), il M&deg; Hosokawa Hideki (7&deg; Aikikai, Shihan) e il M&deg; Nomoto Jun (7&deg; Aikikai, Shihan).
                Durante il seminario consegue il grado di 5&deg; kyu, sostenendo il suo primo esame con il M&deg; Fujimoto.</p>
                <p>Da quel momento, sempre con maggior intensit&agrave;, inizia a frequentare i seminari tenuti dai vari maestri, ed in particolare 
                quelli del M&deg; Fujimoto, di cui &egrave; stato uke dal 1979 fino all'et&agrave; di 50 anni.</p>
                <p>Nel 1982 soggiorna per la prima volta in Giappone per due mesi, e ripete l'esperienza anche in seguito fermandosi per periodi dai due ai quattro mesi
                per poter praticare presso l'Honbu Dojo, il Gessoju Dojo del M&deg; Tada, e il Satomi Hakken Kai del M&deg; Nomoto.<br/></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <p>Ha tenuto e tiene lezioni e seminari in Italia e all'estero (la lista aggiornata dei seminari di quest'anno &egrave; disponibile
                a questa <a href="./seminari.php#<?php echo $s->sid;?>">pagina</a>).</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="acenter pad"><img src="./images/rf03.jpg"/></div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-6">
                	<div class="rank"><span class="piece">&nbsp;</span> <span class="piece">&nbsp;</span> <span class="piece">&nbsp;</span> <span class="piece">&nbsp;</span></div>
                	<div class="rank"><span class="piece">&nbsp;</span> <span class="piece">&nbsp;</span> <span class="piece">&nbsp;</span> <span class="piece">&nbsp;</span></div>
                	<div class="rank"><span class="piece">30.07.1977</span> <span class="piece">Coverciano</span> <span class="piece">5&deg; kyu</span> <span class="piece">M&deg; Fujimoto</span></div>
                	<div class="rank"><span class="piece">26.02.1978</span> <span class="piece">Fano</span> <span class="piece">4&deg; kyu</span> <span class="piece">M&deg; Nomoto</span></div>
                	<div class="rank"><span class="piece">12.11.1978</span> <span class="piece">Pesaro</span> <span class="piece">3&deg; kyu</span> <span class="piece">M&deg; Nomoto</span></div>
                	<div class="rank"><span class="piece">17.02.1980</span> <span class="piece">Pesaro</span> <span class="piece">2&deg; kyu</span> <span class="piece">M&deg; Nomoto</span></div>
                	<div class="rank"><span class="piece">02.08.1980</span> <span class="piece">Coverciano</span> <span class="piece">1&deg; kyu</span> <span class="piece">M&deg; Fujimoto</span></div>
                	<div class="rank"><span class="piece">29.11.1981</span> <span class="piece">Milano</span> <span class="piece">shodan</span> <span class="piece">M&deg; Fujimoto</span></div>
                	<div class="rank"><span class="piece">30.12.1984</span> <span class="piece">Milano</span> <span class="piece">2&deg; dan</span> <span class="piece">M&deg; Fujimoto</span></div>
                	<div class="rank"><span class="piece">29.12.1988</span> <span class="piece">Milano</span> <span class="piece">3&deg; dan</span> <span class="piece">M&deg; Fujimoto</span></div>
                	<div class="rank"><span class="piece">05.08.1995</span> <span class="piece">Caldaro</span> <span class="piece">4&deg; dan</span> <span class="piece">M&deg; Tada</span></div>
                	<div class="rank"><span class="piece">29.07.2000</span> <span class="piece">La Spezia</span> <span class="piece">5&deg; dan</span> <span class="piece">M&deg; Tada</span></div>
                	<div class="rank"><span class="piece">25.07.2009</span> <span class="piece">La Spezia</span> <span class="piece">6&deg; dan</span> <span class="piece">M&deg; Tada</span></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-xs-12">
            <h4>Aikido Renbukai Pesaro: insegnante ragazzi - Claudio Gabucci, 4&deg; dan Aikikai</h4>

            <h4>Aikido Renbukai Rimini: insegnante bambini/ragazzi - Simona Campagna, 4&deg; dan Aikikai</h4>
        	</div>        
        </div>

	</div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
</body>
</html>
