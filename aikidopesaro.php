<?php
    setlocale(LC_TIME, 'ita');
    date_default_timezone_set('Europe/Rome');
    include("./utils/class.utils.php");
    include("./utils/class.seminar.php");
    $s = new seminar();
    $s->setSource("./json/seminari.json");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aikido Renbukai Pesaro | Associazione Renbukai</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <meta name="description" content="aikido pesaro rimini renbukai jo bokken tanto arti marziali foglietta">
    <meta name="author" content="cbolk">
    
    <!-- bootstrap -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
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
              <h3>Aikido Renbukai Pesaro</h3>
        </div>
        <div class="row">
            <div class="col-xs-12">        
                <center>
                    <p><em>orario corsi adulti e principianti</em></p>
                    <div class="timet"><span>&nbsp;</span>  <span><strong>settembre-giugno</strong></span> <span><strong>luglio</strong></span> <span><strong>agosto</strong></span></div>
                    <div class="timet"><span>&nbsp;</span>  <span class='nomobile'>Principianti | Adulti&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class='mobile'>Princ.&nbsp;|&nbsp;Adulti&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>Adulti</span> <span>Adulti</span></div>                
                    <div class="timet"><span class="row day"><span class='nomobile'>marted&igrave; &amp; gioved&igrave;</span><span class='mobile'>mar&nbsp;&amp;&nbsp;gio</span></span> <span class="row">19:30-20:30 | 20:30-21:30</span> <span class="row">19:30-21:00</span> <span class="row">19:30-21:00</span></div>
                    <div class="timet"><span class="row day"><span class='nomobile'>sabato</span><span class='mobile'>sab</span></span> <span class="row">18:00-19:00 | 19:00-20:00</span> <span class="row">18:30-20:00</span> <span class="row">18:30-20:00</span></div>
                    <div class="timet"><span>&nbsp;</span><span>&nbsp;</span></div>
                    <div class="timet"><span>&nbsp;</span><p><em>orario corsi ragazzi</em></p></div>
                    <div class="timet"><span>&nbsp;</span>  <span><strong>ottobre-giugno</strong></span></div>
                    <div class="timet"><span class="row day"><span class='nomobile'>marted&igrave; &amp; gioved&igrave;</span><span class='mobile'>mar&nbsp;&amp;&nbsp;gio</span></span> <span class="row">18:00-19:00</span> </div>
                    <div class="timet"><span>&nbsp;</span><span>&nbsp;</span></div>
                </center>
                <p>Per l'orario del dojo di Rimini consultare <a href="aikidorimini.php">questa pagina</a>, per l'orario comprensivo consultare la pagina dell'<a href="orario.php">orario</a>.</p>
                <div class="clearfix">&nbsp;</div>
                <p><a name='mapme'></a><strong>c/o KeikoDojo</strong><br/>
                <i class="fa fa-map-marker"></i>&nbsp;<span>Via Pietro Gai, 19 - 61100 Pesaro (PU)</span><br/>
                <i class="fa fa-mobile"></i>&nbsp;<span> 340-5996157 (aikido adulti)</span><br/>
                <i class="fa fa-mobile"></i>&nbsp;<span> 334-3453259 (aikido bambini/ragazzi)</span><br/>
                <i class="fa fa-envelope-o"></i>&nbsp;<span> info@aikidorenbukai.it</span></p>
                <div>
                    <iframe class="nomobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2874.725137263933!2d12.904746115505823!3d43.902959179113566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d194fc615be2b%3A0xfa1abbad378072fc!2sVia+Gai+Pietro%2C+19%2C+61122+Pesaro+PU!5e0!3m2!1sen!2sit!4v1451164963649" width="95%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <iframe class="mobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2874.725137263933!2d12.904746115505823!3d43.902959179113566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d194fc615be2b%3A0xfa1abbad378072fc!2sVia+Gai+Pietro%2C+19%2C+61122+Pesaro+PU!5e0!3m2!1sen!2sit!4v1451164963649" width="95%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div><!-- col-xs-12 -->
        </div>
        <!-- footer -->   
        <?php include_once("utils/footer.php") ?>
    </div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
    <!-- google tracking -->   
    <?php include_once("utils/analyticstracking.php") ?>
</body>
</html>
