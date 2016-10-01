<?php
    setlocale(LC_TIME, 'ita');
    date_default_timezone_set('Europe/Rome');
	  include("./utils/class.utils.php");
    include("./utils/class.seminar.php");
    $s = new seminar();
    $s->setSource("./json/seminari.json");
    $util = new utils();
    $to = Date('w')+1;
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oraio | Associazione Renbukai</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <meta name="description" content="aikido scuola pesaro rimini renbukai jo bokken tanto arti marziali foglietta fujimoto osawa tada">
    <meta name="author" content="cbolk">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
</head>
<body id="orario">
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
            <h3><a name="aa"></a><?php echo $util->dowlongInItalian($to); echo " " . Date('d') . " " . $util->getMonthNameFromNumber(Date('m')) . " " . Date('Y'); ?></h3>
        </div>
        <div class="row">
          <div class="col-xs-12">
        <?php if($util->isHoliday()) { ?>

              <h4 class='text-center'>oggi festa ... nessuna lezione</h4>

        <?php } else if($s->isSeminarDay()) { ?>

              <h4 class='text-center'>oggi <a href="./seminari.php#<?php echo $s->sid;?>">seminario</a></h4>

        <?php } else if($to == 0) { ?>

              <h4 class='text-center'>oggi nessuna lezione</h4>

        <?php } else if($to == 1) { ?>

              <h4 class='text-center'>oggi nessuna lezione</h4>

        <?php } else { ?>

          <div class="col-xs-12">
              <?php 
                if($to == 2 || $to == 4) {
              ?>
              <p>Nel dojo di <a href='./aikidopesaro.php#mapme'>Pesaro</a>
              <ul class='ultime'>
              <li><span class='litime'>18:00 - 19:00</span>Ragazzi</li>
              <li><span class='litime'>19:30 - 20:30</span>Principianti &amp; Adulti</li>
              <li><span class='litime'>20:30 - 21:30</span>Adulti</li>
              </ul>         
              <?php
                } else if ($to == 6) {
              ?>     
              <p>Nel dojo di <a href='./aikidopesaro.php'>Pesaro</a>
              <ul class='ultime'>
              <li><span class='litime'>16:00 - 18:00</span>Onoha Itto Ryu&nbsp;<a href="#note" class='noborder'><i class="fa fa-bookmark"></i></a></li>
              <li><span class='litime'>18:00 - 19:00</span>Principianti &amp; Adulti</li>
              <li><span class='litime'>19:00 - 20:00</span>Adulti</li>
              </ul>         
                <ul class="warn">
                    <li><a name="note"></a> per motivi organizzativi, le persone interessate e gli ospiti di altri Gruppi di Pratica interessati a partecipare
                    sono cortesemente invitate ad annunciare la propria presenza tramite e-mail (info@onohaittoryuitalia.org) o telefono (3405996157).</li>
                </ul>
               <?php
                } else if ($to == 3) {
              ?>     
              <p>Nel dojo di <a href='./aikidorimini.php'>Rimini</a>
              <ul class='ultime'>
              <li><span class='litime'>17:00 - 18:00</span>Bambini</li>
              <li><span class='litime'>18:00 - 19:00</span>Ragazzi</li>
              <li><span class='litime'>19:30 - 20:30</span>Principianti &amp; Adulti</li>
              <li><span class='litime'>20:30 - 21:30</span>Adulti</li>
              </ul>         
              <?php
                } else if ($to == 5) {
              ?>     
              <p>Nel dojo di <a href='./aikidorimini.php'>Rimini</a>
              <ul class='ultime'>
              <li><span class='litime'>18:00 - 19:00</span>Ragazzi</li>
              <li><span class='litime'>19:30 - 20:30</span>Principianti &amp; Adulti</li>
              <li><span class='litime'>20:30 - 21:30</span>Adulti</li>
              </ul>         

              <?php 
                }
            } 
          ?>

          </div>
          <div class="clearfix">&nbsp;</div>
        </div>


        <!-- footer -->   
        <?php include_once("utils/footer.php") ?>
    </div><!-- container -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.js"></script>      

    <!-- google tracking -->   
    <?php include_once("utils/analyticstracking.php") ?>

</body>
</html>
