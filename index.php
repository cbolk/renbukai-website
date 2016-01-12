<?php
    setlocale(LC_TIME, 'ita');
    date_default_timezone_set('Europe/Rome');
	include("./utils/class.utils.php");
    include("./utils/class.seminar.php");
    include("./utils/class.gallery.php");
    function sort_by_date($a, $b) {
        $dA = strtotime($a['data']);
        $dB = strtotime($b['data']);

        return $dB - $dA;
    }
    $s = new seminar();
    $util = new utils();
    $s->setSource("./seminari.json");
    $string = file_get_contents("./photos.json");
    $json_a = json_decode($string, true);
    usort($json_a, 'sort_by_date');
    $gallery = new gallery();
    $data = $util->shortDate($json_a[0]['data']);
    $folder = $json_a[0]['folder'];
    $title = $json_a[0]['title'];
    $gallery->setPath('./photos/' . $folder . '/'); //path to the image folder
    $image = $gallery->getPreview(array('jpg','png')); //array of possible image extensions (useful if you have mixed 
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
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">

	<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
	<link rel="stylesheet" media="screen" href="css/cal.css" /> <!--Load CSS-->
</head>
<body>
	<div class="container">
        <div class="nomobile clearfix padleft">
            <?php include('./utils/head_banner.php'); ?>
        </div>
        <div class="header clearfix">
            <?php include('./utils/menumobile.php'); ?>
        </div>
        <div class="mobile">
            <?php include('./utils/head_banner.php'); ?>
        </div>

		<div class="col-xs-12 mainpage">
                <p>Benvenuti nel sito dell'Associazione Renbukai, scuola di <a href="">Aikido</a> attiva a Pesaro e Rimini dal 19xx, che a Pesaro ospita presso il Keikodojo 
                uno dei sei Gruppi di Pratica di <a href="">Onoha Itto Ryu</a> in Italia.</p>

                <p>Il responsabile didattico &egrave; il <a href="./aikidoinsegnante.php">Maestro Roberto Foglietta</a>, 6&deg; dan Aikikai d'Italia e Aikikai Tokyo.</p>

                <p>L'Associazione Renbukai &egrave; affiliata all'Associazione di Cultura Tradizionale Giapponese Aikikai d'Italia - Ente Morale (D.P.R. luglio 1978 n. 528).</p>
        </div><!-- jumbotron -->
        <div class="container marketing">
            <div class="col-xs-12 col-sm-4 col-lg-4">
               <h4><span class="glyphicon glyphicon-copy" aria-hidden="true"></span> Prossimi appuntamenti</h4>
               <div class='maintitle'><?php echo $s->dates; ?> @ <?php echo $s->city; ?></div>
               <?php
                    if($s->image != "" && $s->image != null){
                        ?>
                           <div class='semimage'><img src='./stages/<?php echo $s->image; ?>' /></div>

                        <?php
                    }
               ?>
               <div class="clearfix">&nbsp;</div>
               <div class="caption">
                    <p><?php echo $s->title; ?> 
                    <?php if($s->instructor != "") echo " | " . $s->instructor; ?> 
                     <a title='tutte le informazioni' href='./seminari.php#<?php echo $s->sid; ?>'>&nbsp;<i class="fa fa-angle-double-right"></i></a></p>
                </div>
            </div>
           <div class="col-xs-12 col-sm-4 col-lg-4">
                <h4><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Ultime notizie</h4>
                   <div class='maintitle'></div>
                   <div class='maintxt'></div>
                </div>
            <div class="col-xs-12 col-sm-4 col-lg-4">
            <?php
                    if($image != "" && $image != null){
                        ?>
		                <h4><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Galleria foto</h4>
                             <a class="thumbnail" href="<?php echo $image; ?>">
                                <img  class="img-responsive" src="<?php echo $image; ?>" alt="">
                            </a>
            			<div class="caption"><?php echo $title; ?><a title='tutte le informazioni' href='./gallery.php#<?php echo $folder; ?>'>&nbsp;<i class="fa fa-angle-double-right"></i></a></div>
                        <?php
                    }
               ?>
         	</div>
         	<div class="clearfix mobile">&nbsp;</div>
        	<footer class="footer mobile">
      			<div class="container acenter">
        		<p class="text-muted"><img src="./assets/footer.png" alt=""></p>
      			</div>
   			 </footer>
		</div><!-- container -->
	</div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
    <script src="js/jquery.slicknav.cb.js"></script>
    <script src="js/jquery.slicknav.menu.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>    
</body>
</html>