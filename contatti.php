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
    <title>associazione renbukai - contatti</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <meta name="description" content="aikido pesaro rimini renbukai jo bokken tanto arti marziali foglietta">
    <meta name="author" content="cbolk">
    
    <!-- bootstrap -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->

</head>
<body id="contatti">
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
    		<h3>Contatti</h3>
        </div>
        <div class="row">
        	<div class="col-md-6 col-xs-12">
                <p><strong>Aikido Renbukai Pesaro</strong><br/>
                <p><strong>c/o KeikoDojo</strong><br/>
                <i class="fa fa-map-marker"></i>&nbsp;<span>Via Pietro Gai, 19 - 61100 Pesaro (PU)</span><br/><br/>
                <i class="fa fa-mobile"></i>&nbsp;<span> 340-5996157 (aikido adulti)</span><br/>
                <i class="fa fa-mobile"></i>&nbsp;<span> 334-3453259 (aikido bambini/ragazzi)</span><br/>
                <i class="fa fa-envelope-o"></i>&nbsp;<span> info@aikidorenbukai.it</span></p>
                <div>
                    <iframe class="nomobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2874.725137263933!2d12.904746115505823!3d43.902959179113566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d194fc615be2b%3A0xfa1abbad378072fc!2sVia+Gai+Pietro%2C+19%2C+61122+Pesaro+PU!5e0!3m2!1sen!2sit!4v1451164963649" width="95%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <iframe class="mobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2874.725137263933!2d12.904746115505823!3d43.902959179113566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d194fc615be2b%3A0xfa1abbad378072fc!2sVia+Gai+Pietro%2C+19%2C+61122+Pesaro+PU!5e0!3m2!1sen!2sit!4v1451164963649" width="95%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

        	</div>
            <div class="col-md-6 col-xs-12">
                <p><strong>Aikido Renbukai Rimini</strong><br/>
                <p><strong>c/o NikoNiko</strong><br/>
                <i class="fa fa-map-marker"></i>&nbsp;<span>Via Madonna della scala, 53/a - 47800 Rimini (RN)</span><br/>
                (ingresso da via Tancredi Saletta, sul lato sinistro dell'edificio)<br/>
                <i class="fa fa-mobile"></i>&nbsp;<span> 340-5996157 (aikido adulti)</span><br/>
                <i class="fa fa-mobile"></i>&nbsp;<span> 340-3930384 (aikido bambini/ragazzi)</span><br/>
                <i class="fa fa-envelope-o"></i>&nbsp;<span> info@aikidorenbukai.it</span></p>
                <div>
                    <iframe class="nomobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2866.770956148851!2d12.559866714904427!3d44.067438033564414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132cc397327cec13%3A0x98578c694d5818ff!2sVia+Madonna+della+Scala%2C+53%2C+47921+Rimini+RN!5e0!3m2!1sen!2sit!4v1451165839968" width="95%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <iframe class="mobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2866.770956148851!2d12.559866714904427!3d44.067438033564414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132cc397327cec13%3A0x98578c694d5818ff!2sVia+Madonna+della+Scala%2C+53%2C+47921+Rimini+RN!5e0!3m2!1sen!2sit!4v1451165839968" width="95%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
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

    <!-- google tracking -->   
    <?php include_once("utils/analyticstracking.php") ?>
    
</body>
</html>