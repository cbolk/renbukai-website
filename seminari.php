<?php
    setlocale(LC_TIME, 'ita');
    date_default_timezone_set('Europe/Rome');
	include("./utils/class.utils.php");
    include("./utils/class.seminar.php");
    $s = new seminar();
    $s->setSource("./seminari.json");
    $util = new utils();
    $today = date('Y-m-d');
?>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>associazione renbukai - seminari</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">

	<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
</head>
<body>
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
			  <h3>Seminari</h3><!--?php echo $today; ?-->
        </div>
			<div class="col-lg-12">
    		  	<?php
    		  		$sem = $s->getSeminars(true);
    		  		$num = count($sem);
    		  		for($i = 0; $i < $num; $i++) {
						$firstday = $sem[$i]['giornoinizio'];
						$lastday = $sem[$i]['giornofine'];

						$y = substr($firstday,0,4);
						$m = substr($util->getMonthMedNameFromNumber(substr($firstday,5,2)),0,3);
						$d = substr($firstday,8,2);
						$y2 = substr($lastday,0,4);
						$m2 = substr($util->getMonthMedNameFromNumber(substr($lastday,5,2)),0,3);
						$d2 = substr($lastday,8,2);
						echo "<div class='seminarwrapper col-lg-12 col-xs-12 col-md-12 ";
						if(strtotime($today) > strtotime($lastday))
							echo " passed";
						else 						if (strtotime($today) >= strtotime($firstday) && strtotime($today) <= strtotime($lastday))
							echo " activeseminar";

						echo "'>";
						echo "<a name='" . str_replace("-", "", $firstday) ."'></a>";
						echo "<div class='semimage col-lg-2 col-xs-6 col-md-2 '><img src='./stages/" . $sem[$i]['immagine'] . "' /></div>";
						echo "<div class='semdate col-lg-2 col-xs-6 col-md-2 '>" . strtoupper($m) . "<br/>" . $d . "<br/>" . $y . "<br/><span class='septop'>" . $sem[$i]['città'] . "</span></div>";
    					echo "<div class='seminartext col-lg-8 col-xs-12 col-md-8 '><div class='semdetails'><strong>" . $sem[$i]['titolo'] . "</strong>";
    					if($sem[$i]['diretto'] != "") 
    						echo " <span class='nomobile'>|</span><span class='mobile'><br/></span> <span class='ulined'>" . $sem[$i]['diretto'] . "</span>";
    					echo "</div>";
    					if($firstday != $lastday)
	    					echo "<div class='semdetails'><i class='fa fa-calendar'></i> dal " . $d . "-" . $m . "-" . $y . " al " . $d2 . "-" . $m2 . "-" . $y2 . "</div>";
	    				else
	    					echo "<div class='semdetails'><i class='fa fa-calendar'></i> il " . $d . " " . $m . " " . $y . "</div>";
	    				if($sem[$i]['dojo'] != null)
		    				echo "<div class='semdetails'><i class='fa fa-home'></i> organizzato da " . $sem[$i]['dojo'] . "</div>";
	    				if($sem[$i]['indirizzo'] != null){
		    				echo "<div class='semdetails'><i class='fa fa-map-marker'></i> " . $sem[$i]['indirizzo'] . " ";
		    				$via = strpos($sem[$i]['indirizzo'], ",");
		    				$map = substr($sem[$i]['indirizzo'], $via+2);
		    				echo "<span class='mobile'><br></span>";
		    				echo "<a target=_blank title='apre google maps' href='http://maps.google.com?q=" .  $map . "'><img src='./assets/gmaps.png' width='20px'/>&nbsp;<span class='mobile'>apri in GoogleMaps</span></a>";
		    				echo "</div>";
	    				}
	    				if($sem[$i]['locandina'] != null)
		    				echo "<div class='semdetails'><i class='fa fa-file-o'></i> locandina: <a href='./stages/" . $sem[$i]['locandina'] . "'><i class='fa fa-file-pdf-o'></i></a></div>";
    					echo "</div> <!-- .seminartext -->";
    					//echo "</div> <!-- .seminarentry -->";
    					echo "</div> <!-- .seminarwrapper -->";
    					echo "<div class='clearfix'></div>";
					}
				?>
                <p></p>
                </div>
	</div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>    
</body>
</html>