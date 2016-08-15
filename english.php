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
    <title>associazione renbukai - English</title>
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
	        <h3>Welcome to Aikido Renbukai Pesaro / Rimini</h3>
		</div>            
        <div class="row">
        	<div class="col-xs-12 col-sm-6 col-lg-6 ">
              	<div class="acenter pad"><img src="./images/rf03.jpg"/></div>
        	</div>
        	<div class="col-xs-12 col-sm-6 col-lg-6">
                <p></p>
        		<p>Aikido Renbukai is an Aikido school with two dojos, one in Pesaro and the other in Rimini, affiliated to <a href='http://www.aikikai.it' target=_blank>Aikikai d'Italia</a>.</p>
                <p>Pesaro dojo hosts weekly practise for one of the Italian Onoha Itto Ryu Practise Groups (more information available <a target=_blank href='http://www.onohaittoryuitalia.org/Onoha_Itto_Ryu_Italia/Introduction.html'>here</a>).</p>
                <p>We have both general and youngster classes every <a href='#schedule'>day</a> at our dojos, and it is possible to enroll at any time during the year.</p>
                <p>Roberto Foglietta, VI dan Aikikai d'Italia and Aikikai Tokyo, is the chief instructor.</p>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">    
                 <h4 name="schedule">How to contact / find us</h4>
            </div>
        </div>
        <div class="row">


        </div>
        <div class="row">
            <div class="col-xs-12">    
                 <h4 name="schedule">Class schedule</h4>
            </div>
        </div>
        <div class="row">
            <h4 class='text-center'>September - June</h4>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <center>
                    <table class='orario'>
                    <thead>
                    <tr>
                        <th class="dayh">Ora<span class="mobile"><br/></span></th>
                        <th class="dayh w100p"><span class="nomobile">Monday</span><span class="mobile">Lu</span><br/><span class='spacer'>spa</span></th>
                        <th class="dayh w100p"><span class="nomobile">Tuesday</span><span class="mobile">Ma</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Wednesday</span><span class="mobile">Me</span><br/><a class='rimini nomobile' class='rimini' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Thursday</span><span class="mobile">Gi</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Friday</span><span class="mobile">Ve</span><br/><a class='rimini nomobile' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Saturday</span><span class="mobile">Sa</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
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
                        <td class="hour onohaittoryu" rowspan="4"><span class='nomobile'>Onoha Itto Ryu</span><span class='mobile'>OIR</span><br/><a href="#note" class='noborder'><i class="fa fa-bookmark"></i></td>
                        <td class="time" rowspan="4">16:00<span class='nomobile'> - </span><span class='mobile'><br/></span>18:00</td>
                      </tr>
                      <tr id='s1630'> 
                        <td class="time"></td>
                      </tr>
                      <tr id='s1700'>
                        <td class="time" rowspan="2">17:00<span class='nomobile'> - </span><span class='mobile'><br/></span>18:00</td>
                        <td class="hour bambini" rowspan="2"><span class='nomobile'>Children</span><span class='mobile'>C</span></td>
                      </tr>
                      <tr id='s1730'>
                      </tr>
                      <tr id='s1800'>
                        <td class="time" rowspan="2">18:00<span class='nomobile'> - </span><span class='mobile'><br/></span>19:00</td>
                        <td class="hour ragazzi" rowspan="2"><span class='nomobile'>Youngsters</span><span class='mobile'>Y</span></td>
                        <td class="hour ragazzi" rowspan="2"><span class='nomobile'>Youngsters</span><span class='mobile'>Y</span></td>
                        <td class="hour ragazzi" rowspan="2"><span class='nomobile'>Youngsters</span><span class='mobile'>Y</span></td>
                        <td class="hour ragazzi" rowspan="2"><span class='nomobile'>Youngsters</span><span class='mobile'>Y</span></td>
                        <td class="hour principianti" rowspan="2"><span class='nomobile'>Beginners &amp;<br/> Regular</span><span class='mobile'>B&amp;R</span></td>
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
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Regular</span><span class='mobile'>A</span><br/>&nbsp;</td>
                        <td class="time" rowspan="2">19:00<span class='nomobile'> - </span><span class='mobile'><br/></span>20:00</td>
                      </tr>
                      <tr  id='s1930'>
                        <td class="time" rowspan="2">19:30<span class='nomobile'> - </span><span class='mobile'><br/></span>20:30</td>
                        <td class="hour principianti" rowspan="2"><span class='nomobile'>Beginners &amp;<br/> Regular</span><span class='mobile'>B&amp;R</span></td>
                        <td class="hour principianti" rowspan="2"><span class='nomobile'>Beginners &amp;<br/> Regular</span><span class='mobile'>B&amp;R</span></td>
                        <td class="hour principianti" rowspan="2"><span class='nomobile'>Beginners &amp;<br/> Regular</span><span class='mobile'>B&amp;R</span></td>
                        <td class="hour principianti" rowspan="2"><span class='nomobile'>Beginners &amp;<br/> Regular</span><span class='mobile'>B&amp;R</span></td>
                      </tr>
                      <tr id='s2000'>
                        <td class="hour" rowspan="3"></td>
                        <td class="time"><span class='spacer'>E</span></td>
                      </tr>
                      <tr id='s2030'>
                        <td class="time" rowspan="2">20:30<span class='nomobile'> - </span><span class='mobile'><br/></span>21:30</td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Regular</span><span class='mobile'>A</span></td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Regular</span><span class='mobile'>A</span></td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Regular</span><span class='mobile'>A</span></td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Regular</span><span class='mobile'>A</span></td>
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
            <h4 class='text-center'><a name="07"></a>July &amp; August</h4>
        </div>
        <div class="row">
                 <div class="col-xs-12">
                  <center>
                      <table class="orario">
                          <thead>
                        <tr>
                            <th class="dayh">Ora<span class="mobile"><br/></span></th>
                            <th class="dayh w100p"><span class="nomobile">Monday</span><span class="mobile">Lu</span><br/><span class='spacer'>spa</span></th>
                            <th class="dayh w100p"><span class="nomobile">Tuesday</span><span class="mobile">Ma</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Wednesday</span><span class="mobile">Me</span><br/><a class='rimini nomobile' class='rimini' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Thursday</span><span class="mobile">Gi</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Friday</span><span class="mobile">Ve</span><br/><a class='rimini nomobile' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Saturday</span><span class="mobile">Sa</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
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
                              <td class="hour onohaittoryu"><span class='nomobile'>&nbsp;<br/>&nbsp;<br/>Onoha Itto Ryu</span><span class='mobile'>OIR</span><br/><a href="#note" class='noborder'><i class="fa fa-bookmark"></i></a><br/>&nbsp;</td>
                              <td class="time">16:00<span class='nomobile'> - </span><span class='mobile'><br/></span>18:30</td>
                          </tr>
                          <tr>
                              <td class="time"></td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Regular</span><span class='mobile'>A</span><br/>&nbsp;</td>
                              <td class="time" rowspan="2">18:30<span class='nomobile'>&nbsp;-&nbsp;</span><span class='mobile'><br/></span>20:00</td>
                          </tr>
                          <tr>
                              <td class="time">19:30<span class='nomobile'>&nbsp;-&nbsp;</span><span class='mobile'><br/></span>21:00</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Regular</span><span class='mobile'>A</span><br/>&nbsp;</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Regular</span><span class='mobile'>A</span><br/>&nbsp;</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Regular</span><span class='mobile'>A</span><br/>&nbsp;</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Regular</span><span class='mobile'>A</span><br/>&nbsp;</td>
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
              <div class='legenda'><p>Legend</p>
              <div class='tagbox adulti'>Regular</div>
                <div class='tagbox principianti'>Beginners &amp; Regular</div>
                <div class='tagbox bambini'>Children</div>
                <div class='tagbox ragazzi'>Youngsters</div>
                <div class='tagbox onohaittoryu'>Onoha Iitto Ryu</div>
            </div>
        </div>        
        <div class="row">    
            <div class="col-xs-12">
                <p>Dojos are closed during national holidays:
                </p>
            </div>
            <div class="col-md-6 col-xs-12">
                <ul>
                <li>January 6</li>
                <li>Easter Monday</li>
                <li>April 25</li>
                <li>May 1</li>
                <li>June 2</li>
                </ul>
            </div>
            <div class="col-md-6 col-xs-12">
                <ul>
                <li>August 15</li>
                <li>November 1 - 2</li>
                <li>December 8</li>
                <li>December 25 - 26</li>
                </ul>
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