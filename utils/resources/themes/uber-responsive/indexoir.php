<?php 
    setlocale(LC_TIME, 'ita');
    date_default_timezone_set('Europe/Rome');
    include("./utils/class.utils.php");
    include("./utils/class.seminar.php");
    $util = new utils();
    $s = new seminar();
    $s->setSource("./json/seminari.json");

    function sort_by_date($a, $b) {
        $dA = strtotime($a['data']);
        $dB = strtotime($b['data']);

        return $dB - $dA;
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galleria fotografica OIR | Associazione Renbukai</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <meta name="description" content="aikido scuola pesaro rimini renbukai jo bokken tanto arti marziali foglietta fujimoto osawa tada">
    <meta name="author" content="cbolk">
    <!-- bootstrap -->

    <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/img/favicon.png" />

    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/style.css" />
    <?php echo $gallery->getColorboxStyles(1); ?>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/bootstrap.min.js"></script>
    <?php echo $gallery->getColorboxScripts(); ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
                <h3>Foto Allenamento OIR 10-12-2016</h3>
        </div>
        <div class="row">

            <?php if($gallery->getSystemMessages()): ?>
                <?php foreach($gallery->getSystemMessages() as $message): ?>
                    <div class="alert alert-<?php echo $message['type']; ?>">
                        <a class="close" data-dismiss="alert">×</a>
                        <?php echo $message['text']; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- Start UberGallery v<?php echo UberGallery::VERSION; ?> - Copyright (c) <?php echo date('Y'); ?> Chris Kankiewicz (http://www.ChrisKankiewicz.com) -->
            <?php if (!empty($galleryArray) && $galleryArray['stats']['total_images'] > 0): ?>
                <ul class="gallery-wrapper thumbnails">
                    <?php foreach ($galleryArray['images'] as $image): ?>
                        <li class="">
                            <a href="<?php echo html_entity_decode($image['file_path']); ?>" title="<?php echo $image['file_title']; ?>" class="thumbnail" rel="colorbox">
                                <img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>" />
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <!-- End UberGallery - Distributed under the MIT license: http://www.opensource.org/licenses/mit-license.php -->

            <hr/>


            <?php if ($galleryArray['stats']['total_pages'] > 1): ?>

                <div class="pagination pagination-centered">
                    <ul>
                        <?php foreach ($galleryArray['paginator'] as $item): ?>

                            <?php

                                switch ($item['class']) {

                                    case 'title':
                                        $class = 'disabled';
                                        break;

                                    case 'inactive':
                                        $class = 'disabled';
                                        break;

                                    case 'current':
                                        $class = 'active';
                                        break;

                                    case 'active':
                                        $class = NULL;
                                        break;

                                }

                            ?>

                            <li class="<?php echo $class; ?>">
                                <a href="<?php echo empty($item['href']) ? '#' : $item['href']; ?>"><?php echo $item['text']; ?></a>
                            </li>

                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <p class="credit">Powered by <a href="http://www.ubergallery.net">UberGallery</a></p>
        </div>
        <!-- footer -->   
        <?php include_once("utils/footer.php") ?>
    </div><!-- container -->

    <!-- google tracking -->   
    <?php include_once("utils/analyticstracking.php") ?>

</body>
</html>

