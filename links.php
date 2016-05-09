<?php
    setlocale(LC_TIME, 'ita');
    date_default_timezone_set('Europe/Rome');
    include("./utils/class.utils.php");
    include("./utils/class.seminar.php");
    $s = new seminar();
    $s->setSource("./seminari.json");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>associazione renbukai - link</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
     <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->

</head>
<body id="links">
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
              <h3>Aikido</h3>
        </div>
        <div class="col-xs-12">
            <h4>Italia</h4>
            <ul>
            <li><span class="name">Aikikai Italia</span> <span class="address"><a href="http://www.aikikai.it" target=_blank>www.aikikai.it</a></span></li>
            <li><span class="name">Aikikai Milano - Dojo Fujimoto</span> <span class="address"><a href="http://www.aikidofujimoto.it" target=_blank>www.aikidofujimoto.it</a></span></li>
            </ul>
            <h4>Giappone</h4>
            <ul>
            <li><span class="name">Aikikai Honbu Dojo</span> <span class="address"><a href="http://www.aikikai.or.jp" target=_blank>www.aikikai.or.jp</a></span></li>
            <li><span class="name">Tada Hiroshi HP</span> <span class="address"><a href="http://www.asahi-net.or.jp/~yp7h-td/index_it.html" target=_blank>www.asahi-net.or.jp/~yp7h-td/index_it.html</a></span></li>
            <li><span class="name">Tada Juku Gessoji Dojo</span> <span class="address"><a href="http://www.h5.dion.ne.jp/~aiki-dou/" target=_blank>www.h5.dion.ne.jp/~aiki-dou/</a></span></li>
            </ul>
        </div>
        <div class="row">
              <h3>Onoha itto ryu</h3>
        </div>
        <div class="col-xs-12">
            <h4>Giappone</h4>
            <ul>
            <li><span class="name">Reigakudo</span> <span class="address"><a href="http://onohaittoryu.3.pro.tok2.com/main.html" target=_blank>onohaittoryu.3.pro.tok2.com/main.html</a></span></li>
            </ul>
            <h4>Italia</h4>
            <ul>
            <li><span class="name">Onoha Itto Ryu Italia</span> <span class="address"><a href="http://www.onohaittoryuitalia.org/" target=_blank>www.onohaittoryuitalia.org/</a></span></li>
            </ul>
            <h4>Germania</h4>
            <ul>
            <li><span class="name">Onoha Ittoryu Keiko Deutschland</span> <span class="address"><a href="http://www.onoha-ittoryu.de/" target=_blank>www.onoha-ittoryu.de</a></span></li>
            </ul>            
        </div>    
        <div class="clearfix mobile">&nbsp;</div>
        <footer class="footer mobile">
            <div class="container acenter">
                <p class="text-muted"><img src="./assets/footer.png" alt=""></p>
            </div>
        </footer>
    </div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
</body>
</html>