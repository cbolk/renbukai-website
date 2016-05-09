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
  $util = new utils();
  $s = new seminar();
  $s->setSource("./seminari.json");
  $semdata = $s->getNextNSeminars(2);
	
  $string = file_get_contents("./photos.json");
  $json_a = json_decode($string, true);
  usort($json_a, 'sort_by_date');
  $gallery = new gallery();
  $data = $util->shortDate($json_a[0]['data']);
  $folder = $json_a[0]['folder'];
  $title = $json_a[0]['title'];
  $gallery->setPath('./photos/' . $folder . '/'); //path to the image folder
  $image = $gallery->getPreview(array('jpg','png'),2); //array of possible image extensions (useful if you have mixed 
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>associazione renbukai</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  	<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
</head>
<body id="home">
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
          
        </div>
        <div class="col-xs-12 mainpage">
          <p>Benvenuti nel sito dell'Associazione Renbukai, scuola di <a href="">Aikido</a> attiva a Pesaro e Rimini dal 19xx, che a Pesaro ospita presso il Keikodojo 
          uno dei sei Gruppi di Pratica di <a href="">Onoha Itto Ryu</a> in Italia.</p>

          <p>Il responsabile didattico &egrave; il <a href="./aikidoinsegnante.php">Maestro Roberto Foglietta</a>, 6&deg; dan Aikikai d'Italia e Aikikai Tokyo.</p>

          <p>L'Associazione Renbukai &egrave; affiliata all'Associazione di Cultura Tradizionale Giapponese Aikikai d'Italia - Ente Morale (D.P.R. luglio 1978 n. 528).</p>
        </div><!-- col-xs-12 mainpage -->
        <div class="container marketing">
            <div class="col-xs-12 col-sm-8 col-lg-8">
               <h4 class='acenter'><span class="glyphicon glyphicon-copy" aria-hidden="true"></span> Prossimi appuntamenti</h4>
               <div class="col-xs-12 col-sm-6 col-lg-6">
               <div class='maintitle'><?php echo $semdata[0]['dates']; ?> @ <?php echo $semdata[0]['città']; ?></div>
               <?php
                    if($semdata[0]['immagine'] != "" && $semdata[0]['immagine'] != null){
                        ?>
                           <div class='col-xs-12 col-sm-12 col-lg-12 semimage clearfix'><img src='./stages/<?php echo $semdata[0]['immagine']; ?>' /></div>

                        <?php
                    }
               ?>
               <div class="caption">
                    <p><?php if(strpos(strtolower($semdata[0]['titolo']),'aikido') !== false) echo "<i class='fa fa-adn'></i>"; ?> <?php echo $semdata[0]['titolo']; ?> 
                    <?php if($semdata[0]['diretto'] != "") echo "<br/>&nbsp;&nbsp;&nbsp;&nbsp;" . $semdata[0]['diretto']; ?> 
                     <a title='tutte le informazioni' href='./seminari.php#<?php echo $semdata[0]['sid']; ?>'>&nbsp;<i class="fa fa-angle-double-right"></i></a></p>
                </div>
                </div>
               <div class='mobile clearfix'>&nbsp;</div>
               <div class="col-xs-12 col-sm-6 col-lg-6">
               <div class='maintitle'><?php echo $semdata[1]['dates']; ?> @ <?php echo $semdata[1]['città']; ?></div>
               <?php
                    if($semdata[1]['immagine'] != "" && $semdata[1]['immagine'] != null){
                        ?>
                           <div class='col-xs-12 col-sm-12 col-lg-12 semimage clearfix'><img src='./stages/<?php echo $semdata[1]['immagine']; ?>' /></div>

                        <?php
                    }
               ?>
               <div class="caption">
                    <p><?php if(strpos(strtolower($semdata[1]['titolo']),'aikido') !== false) echo "<i class='fa fa-adn'></i>"; ?> <?php echo $semdata[1]['titolo']; ?> 
                    <?php if($semdata[1]['diretto'] != "") echo "<br/>&nbsp;&nbsp;&nbsp;&nbsp;" . $semdata[1]['diretto']; ?> 
                     <a title='tutte le informazioni' href='./seminari.php#<?php echo $semdata[1]['sid']; ?>'>&nbsp;<i class="fa fa-angle-double-right"></i></a></p>
                </div>
                </div>
                
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4">
            <?php
                    if($image != "" && $image != null){
                        ?>
		                <h4 class='acenter'><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Galleria foto</h4>
            			<div class="caption"><?php echo $title; ?><br/>&nbsp;</div>
                        <div class="col-xs-12 col-sm-6 col-lg-6 semimage">
                             <a href="<?php echo $image[0]['image']; ?>">
                                <img  src="<?php echo $image[0]['image']; ?>" alt="">
                            </a>
            			</div>
                        <div class="col-xs-12 col-sm-6 col-lg-6 semimage">
                             <a href="<?php echo $image[1]['image']; ?>">
                                <img  src="<?php echo $image[1]['image']; ?>" alt="">
                            </a>
            			</div>
                        vai alla galleria <a title='tutte le informazioni' href='./gallery.php#<?php echo $folder; ?>'>&nbsp;<i class="fa fa-angle-double-right"></i></a>
                        <?php
                    }
               ?>
         	</div>
  		</div><!-- container marketing -->
        <div class="clearfix mobile">&nbsp;</div>
        <footer class="footer mobile">
        <div class="container acenter">
            <p class="text-muted"><img src="./assets/footer.png" alt=""></p>
        </div>
        </footer>
    </div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
    <script src="js/jquery.slicknav.cb.js"></script>
    <script src="js/jquery.slicknav.menu.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>    
</body>
</html>