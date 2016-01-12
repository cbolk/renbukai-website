<?php
    setlocale(LC_TIME, 'ita');
    date_default_timezone_set('Europe/Rome');
	include("./utils/class.utils.php");
    include("./utils/class.seminar.php");
    $s = new seminar();
    $s->setSource("./seminari.json");
?>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>associazione renbukai</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">

	<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
	<link rel="stylesheet" media="screen" href="css/cal.css" /> <!--Load CSS-->
</head>
<body>
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

		<div class="jumbotron">
                <p>Benvenuti nel sito dell'Associazione Renbukai, scuola di <a href="">Aikido</a> attiva a Pesaro e Rimini dal 19xx, che a Pesaro ospita presso il Keikodojo 
                uno dei sei Gruppi di Pratica di <a href="">Onoha Itto Ryu</a>.</p>

                <p>Il responsabile didattico &egrave; il <a href="./aikidoinsegnante.php">Maestro Roberto Foglietta</a>, 6&deg; dan Aikikai d'Italia e Aikikai Tokyo.</p>

                <p>L'Associazione Renbukai &egrave; affiliata all'Associazione di Cultura Tradizionale Giapponese Aikikai d'Italia - Ente Morale (D.P.R. luglio 1978 n. 528).</p>
        </div><!-- jumbotron -->
        <div class="row marketing">
            <div class="col-lg-4">
               <h4><span class="glyphicon glyphicon-copy" aria-hidden="true"></span> Prossimo seminario</h4>
               <div class='semdate'><?php echo $s->dates; ?> @ <?php echo $s->city; ?></div>
               <?php
                    if($s->image != "" && $s->image != null){
                        ?>
                           <div class='semimage'><img src='./stages/<?php echo $s->image; ?>' /></div>

                        <?php
                    }
               ?>
               <div class="clearfix">&nbsp;</div>
               <div class="semnext">
                    <p><?php echo $s->title; ?> - </p>
                    <p><?php echo $s->instructor; ?></p>
                    <p>tutti le <a href='./seminari.php#<?php echo $s->sid; ?>'>informazioni</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <h4>Foto dell'ultimo seminario</h4>
                   <div class="semnext"><span class="semdata"></span>
                        <p>Seminario di fine anno</p>
                        <p>Aikikai Milano - Dojo Fujimoto</p>
                        <p>Milano</p>
                    </div>
                </div>
           <div class="col-lg-4">
                <h4>Ultime notizie</h4>
                   <div class="semnext"><span class="semdata"></span>
                        <p></p>
                    </div>
                </div>
		</div><!-- row -->
	</div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
    <script src="js/jquery.slicknav.cb.js"></script>
    <script src="js/jquery.slicknav.menu.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>    
</body>
</html>