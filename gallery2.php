<?php 
	setlocale(LC_TIME, 'ita');
	date_default_timezone_set('Europe/Rome');
    include("./utils/class.utils.php");
    include("./utils/resources/UberGallery.php");
    include("./utils/class.seminar.php");
    $util = new utils();
    $gallery = new UberGallery();
    $s = new seminar();
    $s->setSource("./json/seminari.json");

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
    <title>Gallerie Foto | Associazione Renbukai</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <meta name="description" content="aikido pesaro rimini renbukai jo bokken tanto arti marziali foglietta">
    <meta name="author" content="cbolk">
    <!-- bootstrap -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="./utils/resources/themes/uber-ren/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./utils/resources/themes/uber-ren/css/style.css" />
    <link rel="stylesheet" type="text/css" href="./utils/resources/themes/uber-ren/css/bootstrap-responsive.min.css" />
    <?php echo $gallery->getColorboxStyles(1); ?>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="./utils/resources/themes/uber-ren/js/bootstrap.min.js"></script>
    <?php echo $gallery->getColorboxScripts(); ?>



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
        <div class="row">
    <?php
        $string = file_get_contents("./json/photos.json");
        $json_a = json_decode($string, true);
        usort($json_a, 'sort_by_date');
        foreach ($json_a as $ph => $photo) {
            $data = $util->shortDate($photo['data']);
            $folder = $photo['folder'];
            $title = $photo['title'];
            $galleryArray = $gallery->readImageDirectory('./photos/' . $folder . '/');
            ?>
                    <div class="col-xs-12">                    	
                        <h4><?php echo $title; ?><a name='<?php echo $folder; ?>'></a> (<?php echo substr($data,strlen($data)-9); ?>)</h4>
                        <p><strong><?php echo $photo['copyright']; ?></strong></p>
                        <!--small><?php echo $data; ?>&nbsp;<?php echo $photo['copyright']; ?></small-->
                    </div>
                    <div class="col-xs-12 text-left">
                        <?php if (!empty($galleryArray) && $galleryArray['stats']['total_images'] > 0): ?>
                            <ul class="gallery-wrapper thumbnails">
                                <?php foreach ($galleryArray['images'] as $image): ?>
                                    <li class="">
                                        <a href="<?php echo html_entity_decode($image['file_path']); ?>" title="<?php echo $image['file_title']; ?>" class="thumbnail" rel="colorbox">
                                            <img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title'];   ?>" />
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

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
        </div>
        <!-- footer -->   
        <?php include_once("utils/footer.php") ?>
    </div><!-- container -->
    <script src="js/bootstrap.js"></script>    

    <!-- google tracking -->   
    <?php include_once("utils/analyticstracking.php") ?>

</body>
</html>
