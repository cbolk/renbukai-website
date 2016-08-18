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
    <title>Insegnante | Associazione Renbukai</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <meta name="description" content="aikido pesaro rimini renbukai jo bokken tanto arti marziali foglietta">
    <meta name="author" content="cbolk">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->

</head>
<body id="insegnante">
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
	        <h3>Roberto Foglietta</h3>
		</div>            
        <div class="row">
        	<div class="col-xs-12 col-sm-6 col-lg-6 ">
              	<div class="acenter pad"><img alt="Roberto Foglietta" src="./images/rf03.jpg"/></div>
        	</div>
        	<div class="col-xs-12 col-sm-6 col-lg-6">
                <p></p>
        		<p>Roberto Foglietta inizia la pratica di Aikido nel 1976 con il M&deg; Marcolini Romeo (III dan) e poi con il M&deg; Romagnoli Ezechiele (III dan), dopo aver praticato Judo con il M&deg; Romagnoli Ezechiele (V dan Judo) e Tae Kwon Do con il M&deg; Chung Kwang Soo (IX dan).</p>
                <p>Nell'estate del 1977 frequenta il suo primo seminario di Coverciano dove conosce il M&deg; Tada Hiroshi (IX Aikikai, Shihan), il M&deg; Fujimoto Yogi (VIII Aikikai, Shihan), il M&deg; Hosokawa Hideki (VII Aikikai, Shihan) e il M&deg; Nomoto Jun (VII Aikikai, Shihan), e durante il seminario consegue il grado di V kyu, sostenendo il suo primo esame con il M&deg; Fujimoto.</p>
                <p>Da quel momento, sempre con maggior intensit&agrave;, inizia a frequentare i seminari tenuti dai vari maestri e nel 1981 consegue lo shodan.</p>
                <p>Nel 1982 soggiorna per la prima volta in Giappone per due mesi, e ripete l'esperienza anche in seguito per poter praticare presso l'Honbu Dojo, il Gessoju Dojo del M&deg; Tada, e il Satomi Hakken Kai del M&deg; Nomoto.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-6"> 
                <p>&nbsp;</p>   
                <p>Negli anni successivi Roberto Foglietta pratica Aikido seguendo il M&deg; Tada durante i suoi seminari in Italia, il M&deg; Hosokawa responsabile del Dojo Centrale in Roma, poi trasferitosi in Sardegna, e il M&deg; Fujimoto residente a Milano, membri della direzione didattica dell'Aikikai d'Italia e pi&ugrave; importanti maestri giapponesi residenti in Italia in quegli anni.</p>
                <p>In particolare, inizia a seguire assiduamente il M&deg; Fujimoto sia frequentandone spesso il dojo <a target=_blank href='http://www.aikikaimilano.it'>Aikikai Milano</a>, anche in qualit&agrave; di assistente, sia durante i numerosi seminari in Italia e all'estero, facendo da uke. Roberto Foglietta prosegue con lo studio dell'Aikido e continua a seguire il M&deg; Fujimoto, e nel 2006 riceve il VI dan.</p>
                Nel 2012 il M&deg; Fujimoto scompare prematuramente e Roberto Foglietta, insieme a Roberto Travaglini (VI dan, <a href='http://www.fujinami.it/' target=_blank>Aikido Fujinami Bologna</a>), continua a portare avanti la sua linea didattica.</p>
                <p>Attualmente partecipa agli stage che il M&deg; Tada tiene in Italia, e a quelli di altri maestri giapponesi.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">  
                <div class="acenter pad">
                    <img alt="foto Maestri Fujimoto, Tada e Hosokawa" src="http://www.musubi.it/images/dojo/tada-fuji-hoso02.jpg" alt="M&deg; Fujimoto, Tada e Hosokawa"/>
                    <p class="notice">I M&deg; Fujimoto, Tada e Hosokawa a La Spezia nel 2002<br/>(foto Paolo Bottoni, sito <a target=_blank href='http://www.musubi.it/'>Musubi</a>).</p>
                </div>
            </div>            
        </div>
        <div class="row">        
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <p>&Egrave; il responsabile didattico del dojo di Pesaro e di quello di Rimini, dove insegna.<br/> 
                Tiene seminari in Italia e all'estero (la lista aggiornata dei seminari dell'anno in corso &egrave; disponibile a questa <a href="./seminari.php#<?php echo $s->sid;?>">pagina</a>).</p>
            </div>
        </div>
        <div class="row">        
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="acenter pad">
                    <img alt="foto Maestro Fujimoto" src="./images/fujimoto.jpg" alt="M&deg; Fujimoto (uke R. Foglietta, Laces 200x)."/>
                    <p class="notice">Il M&deg; Fujimoto (uke R. Foglietta, Laces 200x, foto Paolo Bottoni <a target=_blank href='http://www.musubi.it/'>Musubi</a>).</p>
                </div> 
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="acenter pad">
                    <img alt="foto Roberto Foglietta, lezione di armi" src="./images/rf04.jpg" alt="Lezione di bokken"/>
                    <p class="notice">Lezione di armi.</p>
                </div>
            </div>
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