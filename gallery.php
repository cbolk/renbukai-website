<?php 
    include("./utils/class.utils.php");
    include("./utils/class.gallery.php");
    $gallery = new gallery();
    $util = new utils();
	setlocale(LC_TIME, 'ita');
	date_default_timezone_set('Europe/Rome');

    function sort_by_date($a, $b) {
        $dA = strtotime($a['data']);
        $dB = strtotime($b['data']);

        return $dB - $dA;
    }

?>
<!DOCTYPE html>
<html>
  <head lang="it">
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FOTO</title>
        <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
        <link rel="shortcut icon" href="assets/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

		<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
		<link rel="stylesheet" media="screen" href="css/cal.css" /> <!--Load CSS-->
		<link rel="stylesheet" href="css/slicknav.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/jquery.slicknav.cb.js"></script>
		<script src="js/jquery.slicknav.menu.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="photo">
	<div class="site_wrapper">
      <?php include('./utils/head_banner.php'); ?>
      <div class="sidebar">
      <?php include('./utils/menu.php'); ?>
      </div><!-- sidebar -->
		<div class="site_container">
    	<!-- Page Content -->
    	<div class="container">

    <?php
        $string = file_get_contents("./photos.json");
        $json_a = json_decode($string, true);
        usort($json_a, 'sort_by_date');
        foreach ($json_a as $ph => $photo) {
            $data = $util->shortDate($photo['data']);
            $folder = $photo['folder'];
            $title = $photo['title'];
            $gallery->setPath('./photos/' . $folder . '/'); //path to the image folder
            $images = $gallery->getImages(array('jpg','png')); //array of possible image extensions (useful if you have mixed galleries)
            ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title; ?></h1>
                        <!--small><?php echo $data; ?>&nbsp;<?php echo $photo['copyright']; ?></small-->
                    </div>
                </div>
            <?php
            if($images){
                foreach($images as $image){
                    ?>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="<?php echo $image['full']; ?>">
                                <img  class="img-responsive" src="<?php echo $image['full']; ?>" alt="">
                            </a>
                        </div>
                    <?php
                }
            }
        }


    ?>
       <hr>
    </div>
    <!-- /.container -->
		</div><!-- site_container -->
	</div><!-- site_wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
