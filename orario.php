<?php
	//include("./utils/util.php");
?>
<html>
  <head lang="it">
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,700italic,400italic' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>ORARI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
        <link rel="shortcut icon" href="assets/favicon.png">
		<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
		<link rel="stylesheet" media="screen" href="css/cal.css" /> <!--Load CSS-->
		<link rel="stylesheet" href="css/slicknav.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/jquery.slicknav.cb.js"></script>
		<script src="js/jquery.slicknav.menu.js"></script>
	</head>
<body id="orario">
	<div class="site_wrapper">
      <?php include('./utils/head_banner.php'); ?>
      <div class="sidebar">
      <?php include('./utils/menu.php'); ?>
      </div><!-- sidebar -->
		<div class="site_container">
			<div class="generic-page">
    		  <!--div class="generic__title">Orario</div-->
                <h3>da settembre a giugno</h3>
                <table>
                    <thead>
                    <tr><th>Ora</th>
                        <th class="dayh w100p"><span class="nomobile">Luned&igrave;</span><span class="mobile">Lu</span></th>
                        <th class="dayh w100p"><span class="nomobile">Marted&igrave;</span><span class="mobile">Ma</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Mercoled&igrave;</span><span class="mobile">Me</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Gioved&igrave;</span><span class="mobile">Gi</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Venerd&igrave;</span><span class="mobile">Ve</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Sabato</span><span class="mobile">Sa</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th>Ora</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="time">16:00 - 17:00</td>
                            <td rowspan="9" class="hour empty">&nbsp;<br/>&nbsp;</td>
                            <td rowspan="3" class="hour empty">&nbsp;<br/>&nbsp;</td>
                            <td rowspan="3" class="hour empty">&nbsp;</td>
                            <td class="hour empty">&nbsp;<br/>&nbsp;</td>
                            <td rowspan="3" class="hour empty">&nbsp;</td>
                            <td rowspan="3" class="hour onohaittoryu">Onoha Itto Ryu<br/><a href="#note"><i class="fa fa-bookmark-o"></i>
</a></td>
                            <td rowspan="3" class="time">16:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="time">17:00 - 18:00</td>
                            <td rowspan="2" class="hour bambini">Bambini<br/>&nbsp;</td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td class="time">18:00 - 19:00</td>
                            <td class="hour ragazzi">Ragazzi</td>
                            <td class="hour ragazzi">Ragazzi</td>
                            <td class="hour ragazzi">Ragazzi</td>
                            <td class="hour ragazzi">Ragazzi</td>
                            <td class="hour principianti">Principianti &amp; Adulti</td>
                            <td class="time">18:00 - 19:00</td>
                        </tr>
                        <tr>
                            <td class="time">19:00 - 19:30</td>
                            <td class="hour emptyspace">&nbsp;</td>
                            <td class="hour emptyspace">&nbsp;</td>
                            <td class="hour emptyspace">&nbsp;</td>
                            <td class="hour emptyspace">&nbsp;</td>
                            <td rowspan="2" class="hour adulti">Adulti</td>
                            <td rowspan="2" class="time">19:00 - 20:00</td>
                        </tr>
                        <tr>
                            <td class="time">19:30 - 20:00</td>
                            <td rowspan="2" class="hour principianti">Principianti &amp; Adulti</td>
                            <td rowspan="2" class="hour principianti">Principianti &amp; Adulti</td>
                            <td rowspan="2" class="hour principianti">Principianti &amp; Adulti</td>
                            <td rowspan="2" class="hour principianti">Principianti &amp; Adulti</td>
                        </tr>
                        <tr>
                            <td class="time">20:00 - 20:30</td>
                            <td rowspan="3" class="hour empty">&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;</td>
                            <td class="time">20:00 - 20:30</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="time">20:30 - 21:30</td>
                            <td rowspan="2" class="hour adulti">Adulti</td>
                            <td rowspan="2" class="hour adulti">Adulti</td>
                            <td rowspan="2" class="hour adulti">Adulti</td>
                            <td rowspan="2" class="hour adulti">Adulti</td>
                            <td rowspan="2" class="time">20:30 - 21:30</td>
                        </tr>
                        <tr>
                        </tr>
                    </tbody>
                </table>
                <h3>luglio</h3>
                <table>
                    <thead>
                    <tr><th>Ora</th>
                        <th class="dayh w100p"><span class="nomobile">Luned&igrave;</span><span class="mobile">Lu</span></th>
                        <th class="dayh w100p"><span class="nomobile">Marted&igrave;</span><span class="mobile">Ma</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Mercoled&igrave;</span><span class="mobile">Me</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Gioved&igrave;</span><span class="mobile">Gi</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Venerd&igrave;</span><span class="mobile">Ve</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Sabato</span><span class="mobile">Sa</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th>Ora</th>
                    </thead>
                    <tbody>
                       <tr>
                            <td class="time">16:00 - 18:00</td>
                             <td class="hour empty">&nbsp;</td>
                             <td class="hour empty">&nbsp;</td>
                             <td class="hour empty">&nbsp;</td>
                             <td class="hour empty">&nbsp;</td>
                             <td class="hour empty">&nbsp;</td>
                             <td class="hour onohaittoryu">&nbsp;<br/>Onoha Itto Ryu<br/><a href="#note"><i class="fa fa-bookmark-o"></i>

</a></td>
                             <td class="time">16:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td class="time">18:00 - 18:30</td>
                             <td class="hour emptyspace">&nbsp;</td>
                             <td class="hour emptyspace">&nbsp;</td>
                             <td class="hour emptyspace">&nbsp;</td>
                             <td class="hour emptyspace">&nbsp;</td>
                             <td class="hour emptyspace">&nbsp;</td>
                             <td class="hour emptyspace">&nbsp;</td>
                             <td class="time">18:00 - 18:30</td>
                        </tr>
                         <tr>
                            <td class="time">18:30&nbsp;-&nbsp;19:00</td>
                            <td rowspan="6" class="hour empty">&nbsp;</td>
                            <td rowspan="2" class="hour empty">&nbsp;</td>
                            <td rowspan="3" class="hour empty">&nbsp;</td>
                            <td rowspan="2" class="hour empty">&nbsp;</td>
                            <td rowspan="3" class="hour empty">&nbsp;<br/>&nbsp;<br/>&nbsp;</td>
                            <td rowspan="3" class="hour adulti">Adulti</td>
                            <td class="time">18:30&nbsp;-&nbsp;19:00</td>
                        </tr>
                        <tr>
                            <td class="time">19:00&nbsp;-&nbsp;19:30</td>
                            <td class="time">19:00&nbsp;-&nbsp;19:30</td>
                        </tr>
                        <tr>
                            <td class="time">19:30 - 20:00</td>
                            <td rowspan="3" class="hour adulti">Adulti</td>
                            <td rowspan="3" class="hour adulti">Adulti</td>
                            <td class="time">19:30 - 20:00</td>
                        </tr>
                        <tr>
                            <td class="time">20:00 - 20:30</td>
                            <td rowspan="3" class="hour adulti">Adulti</td>
                            <td rowspan="3" class="hour adulti">Adulti</td>
                            <td rowspan="3" class="hour empty">&nbsp;</td>
                            <td class="time">20:00 - 20:30</td>
                        </tr>
                        <tr>
                            <td class="time">20:30 - 21:00</td>
                            <td class="time">20:30 - 21:00</td>
                        </tr>
                        <tr>
                            <td class="time">21:00 - 21:30</td>
                            <td class="hour empty">&nbsp;</td>
                            <td class="hour empty">&nbsp;</td>
                            <td class="time">21:00 - 21:30</td>
                        </tr>
                    </tbody>
                </table>
                <h3>agosto</h3>
                <table>
                    <thead>
                    <tr><th>Ora</th>
                        <th class="dayh w100p"><span class="nomobile">Luned&igrave;</span><span class="mobile">Lu</span></th>
                        <th class="dayh w100p"><span class="nomobile">Marted&igrave;</span><span class="mobile">Ma</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Mercoled&igrave;</span><span class="mobile">Me</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Gioved&igrave;</span><span class="mobile">Gi</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Venerd&igrave;</span><span class="mobile">Ve</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Sabato</span><span class="mobile">Sa</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th>Ora</th>
                    </thead>
                    <tbody>
                       <tr>
                            <td class="time">16:00 - 18:30</td>
                            <td rowspan="3" class="hour empty">&nbsp;</td>
                             <td rowspan="2" class="hour empty">&nbsp;</td>
                             <td rowspan="2" class="hour empty">&nbsp;</td>
                             <td rowspan="2" class="hour empty">&nbsp;</td>
                             <td rowspan="2" class="hour empty">&nbsp;</td>
                             <td class="hour onohaittoryu">&nbsp;<br/>&nbsp;<br/>Onoha Itto Ryu<br/><a href="#note"><i class="fa fa-bookmark-o"></i></a><br/>&nbsp;</td>
                             <td class="time">16:00 - 18:30</td>
                        </tr>
                         <tr>
                            <td class="time">18:30&nbsp;-&nbsp;20:00</td>
                            <td class="hour adulti">&nbsp;<br/>Adulti<br/>&nbsp;</td>
                            <td class="time">18:30&nbsp;-&nbsp;20:00</td>
                        </tr>
                        <tr>
                            <td class="time">20:00 - 21:30</td>
                            <td class="hour adulti">&nbsp;<br/>Adulti<br/>&nbsp;</td>
                            <td class="hour adulti">Adulti</td>
                            <td class="hour adulti">Adulti</td>
                            <td class="hour adulti">Adulti</td>
                            <td class="hour empty">&nbsp;</td>
                            <td class="time">20:00 - 21:30</td>
                        </tr>
                    </tbody>
                </table>
                <div class="notice"><a name="note"><i class="fa fa-bookmark-o"></i></a> per motivi organizzativi, le persone interessate e gli ospiti di altri Gruppi di Pratica interessati a partecipare
                sono cortesemente invitate ad annunciare la propria presenza tramite e-mail (info@onohaittoryuitalia.org) o telefono (3405996157).</div>
            </div><!-- generic-page -->
		</div><!-- site_container -->
	</div><!-- site_wrapper -->
</body>
</html>