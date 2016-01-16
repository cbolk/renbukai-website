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
	
    $gallery = new gallery();
    $data = $util->shortDate($json_a[0]['data']);
    $gallery->setPath('./stages/'); //path to the image folder
    $image = $gallery->getImages(array('jpg','png','gif')); //array of possible image extensions  
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
		<div class="panel panel-default">
  			<div class="panel-heading">Elenco seminari</div>
  				<div class="panel-body">
    				<table class="table">
    					
    				</table>
  				</div>
			</div>		
		</div>
</body>
</html>
