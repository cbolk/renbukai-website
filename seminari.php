<?php
	date_default_timezone_set('Europe/Rome');
	setlocale(LC_TIME, 'it_IT');
	include("./utils/class.utils.php");
    $util = new utils();

    function sort_by_date($a, $b) {
    	$dA = strtotime($a['giornoinizio']);
    	$dB = strtotime($b['giornoinizio']);

    	return $dA - $dB;
	}

?>
<html>
  <head lang="it">
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,700italic,400italic' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>aikido - seminari</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
        <link rel="shortcut icon" href="assets/favicon.png">
		<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
		<link rel="stylesheet" media="screen" href="css/cal.css" /> <!--Load CSS-->
		<link rel="stylesheet" href="css/slicknav.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/jquery.slicknav.cb.js"></script>
		<script src="js/jquery.slicknav.menu.js"></script>
	</head>
<body id="seminari">
	<div class="site_wrapper">
      <?php include('./utils/head_banner.php'); ?>
      <div class="sidebar">
      <?php include('./utils/menu.php'); ?>
      </div><!-- sidebar -->
		<div class="site_container">
			<div class="generic-page">
    		  <h3>Seminari</h3>
    		  	<?php

					$string = file_get_contents("./seminari.json");
					$json_a = json_decode($string, true);
					usort($json_a, 'sort_by_date');
					foreach ($json_a as $s => $sem) {
						$firstday = $sem['giornoinizio'];
						$lastday = $sem['giornofine'];
						$y = substr($firstday,0,4);
						$m = substr($util->getMonthMedNameFromNumber(substr($firstday,5,2)),0,3);
						$d = substr($firstday,8,2);
						$y2 = substr($lastday,0,4);
						$m2 = substr($util->getMonthMedNameFromNumber(substr($lastday,5,2)),0,3);
						$d2 = substr($lastday,8,2);
						echo "<div class='semimage'><img src='./stages/" . $sem['immagine'] . "' /></div>";
						echo "<div class='seminarentry'>";
						$a = strtotime($sem['giornoinizio']);
						?>
							<div class="semdate"><?php echo strtoupper($m) . "<br/>" . $d . "<br/>" . $y; ?></div>
						<?
    					echo "<div class='seminartext'><div class='semdetails'><strong>" . $sem['titolo'] . "</strong> | " . $sem['diretto'] . " a " . $sem['città'] . "</div>";
    					if($firstday != $lastday)
	    					echo "<div class='semdetails'><i class='fa fa-calendar'></i> dal " . $d . "-" . $m . "-" . $y . " al " . $d2 . "-" . $m2 . "-" . $y2 . "</div>";
	    				else
	    					echo "<div class='semdetails'><i class='fa fa-calendar'></i> il " . $d . " " . $m . " " . $y . "</div>";
	    				if($sem['dojo'] != null)
		    				echo "<div class='semdetails'>organizzato da " . $sem['dojo'] . "</div>";
	    				if($sem['città'] != null)
		    				echo "<div class='semdetails'><i class='fa fa-map-marker'></i> " . $sem['indirizzo'] . " " . $sem['città'] . "</div>";
	    				if($sem['locandina'] != null)
		    				echo "<div class='semdetails'>locandina: <a href='./stages/" . $sem['locandina'] . "'><i class='fa fa-file-pdf-o'></i></a></div>";
    					echo "</div> <!-- .seminartext -->";
    					echo "</div> <!-- .seminarentry -->";
    					echo "<div class='clear'></div>";
					}

				?>
                <p></p>
            </div><!-- generic-page -->
		</div><!-- site_container -->
	</div><!-- site_wrapper -->
</body>
</html>