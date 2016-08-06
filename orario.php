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
    <title>associazione renbukai - orario</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
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
            <h3><a name="aa"></a>Orari delle lezioni</h3>
        </div>

        <div class="row">
            <h4 class='text-center'>da settembre a giugno</h4>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <center>
                    <table class='orario'>
                    <thead>
                    <tr>
                        <th class="dayh">Ora<span class="mobile"><br/></span></th>
                        <th class="dayh w100p"><span class="nomobile">Luned&igrave;</span><span class="mobile">Lu</span><br/><span class='spacer'>spa</span></th>
                        <th class="dayh w100p"><span class="nomobile">Marted&igrave;</span><span class="mobile">Ma</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Mercoled&igrave;</span><span class="mobile">Me</span><br/><a class='rimini nomobile' class='rimini' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Gioved&igrave;</span><span class="mobile">Gi</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Venerd&igrave;</span><span class="mobile">Ve</span><br/><a class='rimini nomobile' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Sabato</span><span class="mobile">Sa</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                        <th class="dayh">Ora<span class="mobile"><br/></span></th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr id='s1600'>
                        <td class="time"></td>
                        <td class="hour" rowspan='11'></td>
                        <td class="hour" rowspan='4'></td>
                        <td class="hour" rowspan='2'><span class='spacer'>E<br/>E</span></td>
                        <td class="hour" rowspan='4'></td>
                        <td class="hour" rowspan='4'></td>
                        <td class="hour onohaittoryu" rowspan="4"><span class='nomobile'>Onoha Itto Ryu</span><span class='mobile'>OIR</span><br/><a href="#note"><i class="fa fa-bookmark"></i></td>
                        <td class="time" rowspan="4">16:00<span class='nomobile'> - </span><span class='mobile'><br/></span>18:00</td>
                      </tr>
                      <tr id='s1630'> 
                        <td class="time"></td>
                      </tr>
                      <tr id='s1700'>
                        <td class="time" rowspan="2">17:00<span class='nomobile'> - </span><span class='mobile'><br/></span>18:00</td>
                        <td class="hour bambini" rowspan="2"><span class='nomobile'>Bambini</span><span class='mobile'>B</span></td>
                      </tr>
                      <tr id='s1730'>
                      </tr>
                      <tr id='s1800'>
                        <td class="time" rowspan="2">18:00<span class='nomobile'> - </span><span class='mobile'><br/></span>19:00</td>
                        <td class="hour ragazzi" rowspan="2"><span class='nomobile'>Ragazzi</span><span class='mobile'>R</span></td>
                        <td class="hour ragazzi" rowspan="2"><span class='nomobile'>Ragazzi</span><span class='mobile'>R</span></td>
                        <td class="hour ragazzi" rowspan="2"><span class='nomobile'>Ragazzi</span><span class='mobile'>R</span></td>
                        <td class="hour ragazzi" rowspan="2"><span class='nomobile'>Ragazzi</span><span class='mobile'>R</span></td>
                        <td class="hour principianti" rowspan="2"><span class='nomobile'>Princianti &amp;<br/> Adulti</span><span class='mobile'>P&amp;A</span></td>
                        <td class="time" rowspan="2">18:00<span class='nomobile'> - </span><span class='mobile'><br/></span>19:00</td>
                      </tr>
                      <tr id='s1830'>
                      </tr>
                      <tr id='s1900'>
                        <td class="time"></td>
                        <td class="hour"></td>
                        <td class="hour"></td>
                        <td class="hour"></td>
                        <td class="hour"></td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Adulti</span><span class='mobile'>A</span><br/>&nbsp;</td>
                        <td class="time" rowspan="2">19:00<span class='nomobile'> - </span><span class='mobile'><br/></span>20:00</td>
                      </tr>
                      <tr  id='s1930'>
                        <td class="time" rowspan="2">19:30<span class='nomobile'> - </span><span class='mobile'><br/></span>20:30</td>
                        <td class="hour principianti" rowspan="2"><span class='nomobile'>Princianti &amp;<br/> Adulti</span><span class='mobile'>P&amp;A</span></td>
                        <td class="hour principianti" rowspan="2"><span class='nomobile'>Princianti &amp;<br/> Adulti</span><span class='mobile'>P&amp;A</span></td>
                        <td class="hour principianti" rowspan="2"><span class='nomobile'>Princianti &amp;<br/> Adulti</span><span class='mobile'>P&amp;A</span></td>
                        <td class="hour principianti" rowspan="2"><span class='nomobile'>Princianti &amp;<br/> Adulti</span><span class='mobile'>P&amp;A</span></td>
                      </tr>
                      <tr id='s2000'>
                        <td class="hour" rowspan="3"></td>
                        <td class="time"><span class='spacer'>E</span></td>
                      </tr>
                      <tr id='s2030'>
                        <td class="time" rowspan="2">20:30<span class='nomobile'> - </span><span class='mobile'><br/></span>21:30</td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Adulti</span><span class='mobile'>A</span></td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Adulti</span><span class='mobile'>A</span></td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Adulti</span><span class='mobile'>A</span></td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Adulti</span><span class='mobile'>A</span></td>
                        <td class="time"><span class='spacer'>E</span></td>
                      </tr>
                      <tr  id='s2100'>
                        <td class="time lastcell"><span class='spacer'>E</span></td>
                      </tr>
                      </tbody>
                    </table>
                </center>
            </div>
            <div class="clearfix">&nbsp;</div>
        </div>
        <div class="row">
    		<h4 class='text-center'><a name="07"></a>luglio &amp; agosto</h4>
        </div>
        <div class="row">
                 <div class="col-xs-12">
                  <center>
                      <table class="orario">
                          <thead>
                        <tr>
                            <th class="dayh">Ora<span class="mobile"><br/></span></th>
                            <th class="dayh w100p"><span class="nomobile">Luned&igrave;</span><span class="mobile">Lu</span><br/><span class='spacer'>spa</span></th>
                            <th class="dayh w100p"><span class="nomobile">Marted&igrave;</span><span class="mobile">Ma</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Mercoled&igrave;</span><span class="mobile">Me</span><br/><a class='rimini nomobile' class='rimini' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Gioved&igrave;</span><span class="mobile">Gi</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Venerd&igrave;</span><span class="mobile">Ve</span><br/><a class='rimini nomobile' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Sabato</span><span class="mobile">Sa</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                            <th class="dayh">Ora<span class="mobile"><br/></span></th>
                        </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td class="time">16:00<span class='nomobile'> - </span><span class='mobile'><br/></span>18:30</td>
                              <td rowspan="4" class="hour empty">&nbsp;</td>
                              <td rowspan="2" class="hour empty">&nbsp;</td>
                              <td rowspan="2" class="hour empty">&nbsp;</td>
                              <td rowspan="2" class="hour empty">&nbsp;</td>
                              <td rowspan="2" class="hour empty">&nbsp;</td>
                              <td class="hour onohaittoryu"><span class='nomobile'>&nbsp;<br/>&nbsp;<br/>Onoha Itto Ryu</span><span class='mobile'>OIR</span><br/><a href="#note"><i class="fa fa-bookmark"></i></a><br/>&nbsp;</td>
                              <td class="time">16:00<span class='nomobile'> - </span><span class='mobile'><br/></span>18:30</td>
                          </tr>
                          <tr>
                              <td class="time"></td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Adulti</span><span class='mobile'>A</span><br/>&nbsp;</td>
                              <td class="time" rowspan="2">18:30<span class='nomobile'>&nbsp;-&nbsp;</span><span class='mobile'><br/></span>20:00</td>
                          </tr>
                          <tr>
                              <td class="time">19:30<span class='nomobile'>&nbsp;-&nbsp;</span><span class='mobile'><br/></span>21:00</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Adulti</span><span class='mobile'>A</span><br/>&nbsp;</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Adulti</span><span class='mobile'>A</span><br/>&nbsp;</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Adulti</span><span class='mobile'>A</span><br/>&nbsp;</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Adulti</span><span class='mobile'>A</span><br/>&nbsp;</td>
                          </tr>
                              <td class="time"></td>
                              <td class="hour empty">&nbsp;</td>
                          </tr>
                          </tbody>
                      </table>
                  </center>
              </div>
               <div class="clearfix">&nbsp;</div>
            </div>               
        <div class="clearfix">&nbsp;</div>
        <div class="col-xs-12 mobile">
              <div class='legenda'><p>Legenda</p>
              <div class='tagbox adulti'>Adulti</div>
                <div class='tagbox principianti'>Principianti &amp; Adulti</div>
                <div class='tagbox bambini'>Bambini</div>
                <div class='tagbox ragazzi'>Ragazzi</div>
                <div class='tagbox onohaittoryu'>Onoha Iitto Ryu</div>
            </div>
        </div>
        <div class="clearfix mobile">&nbsp;</div>
        <div class="col-xs-12">
            <p>Il dojo &egrave; chiuso in concomitanza delle seguenti festivit&agrave;:
            </p>
        </div>
        <div class="col-md-6 col-xs-12">
            <ul>
            <li>Epifania (6 gennaio)</li>
            <li>Luned&igrave; dell'Angelo</li>
            <li>Festa della liberazione (25 aprile)</li>
            <li>Festa del lavoro (1 maggio)</li>
            <li>Festa della Repubblica (2 giugno)</li>
            </ul>
        </div>
        <div class="col-md-6 col-xs-12">
            <ul>
            <li>Ferragosto (15 agosto)</li>
            <li>Ognissanti (1 novembre)</li>
            <li>Morti (2 novembre)</li>
            <li>Immacolata concezione (8 dicembre)</li>
            <li>S. Natale (25 dicembre)</li>
            </ul>
        </div>
        <div class="col-xs-12">
            <ul class="warn">
                <li><a name="note"></a> per motivi organizzativi, le persone interessate e gli ospiti di altri Gruppi di Pratica interessati a partecipare
                sono cortesemente invitate ad annunciare la propria presenza tramite e-mail (info@onohaittoryuitalia.org) o telefono (3405996157).</li>
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
    <script src="./js/bootstrap.js"></script>      

    <!-- google tracking -->   
    <?php include_once("utils/analyticstracking.php") ?>

</body>
</html>
