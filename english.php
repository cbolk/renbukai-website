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
    <title>English Infos | Associazione Renbukai</title>
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
	        <h3>Welcome to Associazione Renbukai</h3>
		</div>            
        <div class="row">
        	<div class="col-xs-12 col-sm-4 col-lg-4">
              	<div class="acenter pad"><img alt='Roberto Foglietta' src="./images/rf03.jpg"/></div>
        	</div>
        	<div class="col-xs-12 col-sm-8 col-lg-8">
                <p></p>
        		<p>Associazione Renbukai is an Aikido school with two dojos, one in Pesaro and the other one in Rimini, affiliated to <a href='http://www.aikikai.it' target=_blank>Aikikai d'Italia</a>.</p>
                <p>Pesaro dojo hosts weekly practise for one of the Italian Onoha Itto Ryu Practice Groups (more information available <a target=_blank href='http://www.onohaittoryuitalia.org/Onoha_Itto_Ryu_Italia/Introduction.html'>here</a>).</p>
                <p>We have both general and youngster classes every <a href='#schedule'>day</a> at our dojos, and it is possible to enroll at any time during the year.</p>
                <p>Roberto Foglietta, VI dan Aikikai d'Italia and Aikikai Tokyo, is the chief instructor.</p>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">    
                 <h2 name="schedule" class="text-primary">How to contact / find us</h2>
            </div>
        </div>
      <div class="row">
        <p><br/>&nbsp;&nbsp;&nbsp;You can reach us in one of these ways:
            <ul>
              <li>come and see us in our dojo, in Pesaro or Rimini, during classes (see the <a href='#schedule'>schedule</a>).
              <li>give us a call: 340-5996157</li>
              <li>send an email: info@aikidorenbukai.it</li>
            </ul>
      </div>
      <div class="row">
          <div class="col-md-6 col-xs-12">
                <p><strong>Aikido Renbukai Pesaro</strong><br/>
                <p><strong>c/o KeikoDojo</strong><br/>
                <i class="fa fa-map-marker"></i>&nbsp;<span>Via Pietro Gai, 19 - 61100 Pesaro (PU)</span><br/><br/>
                <div>
                    <iframe class="nomobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2874.725137263933!2d12.904746115505823!3d43.902959179113566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d194fc615be2b%3A0xfa1abbad378072fc!2sVia+Gai+Pietro%2C+19%2C+61122+Pesaro+PU!5e0!3m2!1sen!2sit!4v1451164963649" width="95%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <iframe class="mobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2874.725137263933!2d12.904746115505823!3d43.902959179113566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d194fc615be2b%3A0xfa1abbad378072fc!2sVia+Gai+Pietro%2C+19%2C+61122+Pesaro+PU!5e0!3m2!1sen!2sit!4v1451164963649" width="95%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

          </div>
            <div class="col-md-6 col-xs-12">
                <p class="mobile">&nbsp;<br/>&nbsp;</p>
                <p><strong>Aikido Renbukai Rimini</strong><br/>
                <p><strong>c/o NikoNiko</strong><br/>
                <i class="fa fa-map-marker"></i>&nbsp;<span>Via Madonna della scala, 53/a - 47800 Rimini (RN)</span><br/>
                (entrance from via Tancredi Saletta, lefthand-side of the building)<br/>
                <div>
                    <iframe class="nomobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2866.770956148851!2d12.559866714904427!3d44.067438033564414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132cc397327cec13%3A0x98578c694d5818ff!2sVia+Madonna+della+Scala%2C+53%2C+47921+Rimini+RN!5e0!3m2!1sen!2sit!4v1451165839968" width="95%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <iframe class="mobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2866.770956148851!2d12.559866714904427!3d44.067438033564414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132cc397327cec13%3A0x98578c694d5818ff!2sVia+Madonna+della+Scala%2C+53%2C+47921+Rimini+RN!5e0!3m2!1sen!2sit!4v1451165839968" width="95%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">    
                 <h2 class="text-primary"><a name="schedule"></a>Class schedule</h2>
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
                        <th class="dayh">Time<span class="mobile"><br/></span></th>
                        <th class="dayh w100p"><span class="nomobile">Monday</span><span class="mobile">Mo</span><br/><span class='spacer'>spa</span></th>
                        <th class="dayh w100p"><span class="nomobile">Tuesday</span><span class="mobile">Tu</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Wednesday</span><span class="mobile">We</span><br/><a class='rimini nomobile' class='rimini' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Thursday</span><span class="mobile">Th</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Friday</span><span class="mobile">Fr</span><br/><a class='rimini nomobile' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                        <th class="dayh w100p"><span class="nomobile">Saturday</span><span class="mobile">Sa</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                        <th class="dayh">Time<span class="mobile"><br/></span></th>
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
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Regular</span><span class='mobile'>R</span><br/>&nbsp;</td>
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
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Regular</span><span class='mobile'>R</span></td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Regular</span><span class='mobile'>R</span></td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Regular</span><span class='mobile'>R</span></td>
                        <td rowspan="2" class="hour adulti"><span class='nomobile'>Regular</span><span class='mobile'>R</span></td>
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
                            <th class="dayh">Time<span class="mobile"><br/></span></th>
                            <th class="dayh w100p"><span class="nomobile">Monday</span><span class="mobile">Mo</span><br/><span class='spacer'>spa</span></th>
                            <th class="dayh w100p"><span class="nomobile">Tuesday</span><span class="mobile">Tu</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Wednesday</span><span class="mobile">We</span><br/><a class='rimini nomobile' class='rimini' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Thursday</span><span class="mobile">Th</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Friday</span><span class="mobile">Fr</span><br/><a class='rimini nomobile' href="./aikidorimini.php">Rimini</a><a class='rimini mobile' class='rimini' href="./aikidorimini.php">RI</a> <i class="rimini fa fa-map-marker"></i></th>
                            <th class="dayh w100p"><span class="nomobile">Saturday</span><span class="mobile">Sa</span><br/><a class='pesaro nomobile' href="./aikidopesaro.php">Pesaro</a><a class='mobile pesaro' href="./aikidopesaro.php">PE</a> <i class="pesaro fa fa-map-marker"></i></th>
                            <th class="dayh">Time<span class="mobile"><br/></span></th>
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
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Regular</span><span class='mobile'>R</span><br/>&nbsp;</td>
                              <td class="time" rowspan="2">18:30<span class='nomobile'>&nbsp;-&nbsp;</span><span class='mobile'><br/></span>20:00</td>
                          </tr>
                          <tr>
                              <td class="time">19:30<span class='nomobile'>&nbsp;-&nbsp;</span><span class='mobile'><br/></span>21:00</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Regular</span><span class='mobile'>R</span><br/>&nbsp;</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Regular</span><span class='mobile'>R</span><br/>&nbsp;</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Regular</span><span class='mobile'>R</span><br/>&nbsp;</td>
                              <td class="hour adulti" rowspan="2">&nbsp;<br/><span class='nomobile'>Regular</span><span class='mobile'>R</span><br/>&nbsp;</td>
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
      <div class="row">
        <div class="col-xs-12">
          <h2 class="text-center text-primary">Upcoming event<br>&nbsp;</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-4 text-right">
          <a href='./stages/20160910.pdf' title='scarica la locandina seminario'><img alt="locandina stage" src="./stages/20160910.thumb.png" /></a>
        </div>
        <div class="col-xs-12 col-md-8">
          <div class="maintitle"><h3>Sep 10-11 2016 @ Pesaro</h3></div>
          <div class="caption">
              <p><strong>Aikido Seminar - R. Foglietta: 40 years of practice</strong></p>
              <p>Schedule: Sat. 18-20&nbsp;&nbsp;dinner<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sun. 10-12</p>

              <p>Open classes (no fee).</p>
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