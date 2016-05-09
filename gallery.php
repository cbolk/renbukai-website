<?php 
	setlocale(LC_TIME, 'ita');
	date_default_timezone_set('Europe/Rome');
    include("./utils/class.utils.php");
    include("./utils/class.gallery.php");
    include("./utils/class.seminar.php");
    $gallery = new gallery();
    $util = new utils();
    $s = new seminar();
    $s->setSource("./seminari.json");

    function sort_by_date($a, $b) {
        $dA = strtotime($a['data']);
        $dB = strtotime($b['data']);

        return $dB - $dA;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>foto</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
</head>

<body id="photo">
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
        		<h3>Gallerie fotografiche</h3>
        </div>
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
                    <div class="col-xs-12">                    	
                        <h4><?php echo $title; ?><a name='<?php echo $folder; ?>'></a> (<?php echo substr($data,strlen($data)-9); ?>)</h4>
                        <p><strong><?php echo $photo['copyright']; ?></strong></p>
                        <!--small><?php echo $data; ?>&nbsp;<?php echo $photo['copyright']; ?></small-->
                    </div>
                    <div class="col-xs-12">
            <?php
            if($images){
                foreach($images as $image){
                    ?>
                        <div class="col-lg-3 col-md-3 col-xs-4 thumb">
                            <a class="thumbnail" href="<?php echo $image['full']; ?>">
                                <img  class="img-responsive" src="<?php echo $image['full']; ?>" alt="">
                            </a>
                        </div>
                    <?php
                }
            }?>
          			</div>
                    <div class="col-xs-12">
                        <?php if(!($photo['more'] === "" || $photo['more'] == "")) { ?>
                        <em>ulteriori scatti:</em> <a href='<?php echo $photo['more']; ?>' target='_blank'>qui</a>
                        <?php } ?>
	                </div>
	                <div class="col-xs-12">
	                <hr/>
	                </div>
<?php
        }


    ?>
       <hr/>
        <div class="clearfix mobile">&nbsp;</div>
        <footer class="footer mobile">
            <div class="container acenter">
                <p class="text-muted"><img src="./assets/footer.png" alt=""></p>
            </div>
        </footer>
    </div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>    
</body>
</html>
