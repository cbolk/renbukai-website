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
    <title>associazione renbukai - insegnante</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->

</head>
<body id="orario">
	<div class="container">
        <div class="nomobile">
            <?php include('./utils/head_banner.php'); ?>
        </div>
        <div class="header clearfix">
            <?php include('./utils/menumobile.php'); ?>
        </div>
        <div class="mobile">
            <?php include('./utils/head_banner.php'); ?>
        </div>
        <div class="row">
        	<div class="col-xs-12">
        		<h3>da settembre a giugno</h3>
        	</div>
        </div>
        <div class="row">               
        	<div class="col-xs-12">
            <center>
                <table>
                    <thead>
                    <tr><th class="dayh">Ora</th>
                        <th class="dayh w100p"><span class="nomobile">Luned&igrave;</span><span class="mobile">Lu</span></th>
                        <th class="dayh w100p"><span class="nomobile">Marted&igrave;</span><span class="mobile">Ma</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Mercoled&igrave;</span><span class="mobile">Me</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Gioved&igrave;</span><span class="mobile">Gi</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Venerd&igrave;</span><span class="mobile">Ve</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Sabato</span><span class="mobile">Sa</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh">Ora</th>
                        </tr>
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
                            <td rowspan="2" class="hour bambini">Bambini</td>
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
                            <td class="time" >19:00 - 19:30</td>
                            <td class="hour emptyspace">&nbsp;</td>
                            <td class="hour emptyspace">&nbsp;</td>
                            <td class="hour emptyspace">&nbsp;</td>
                            <td class="hour emptyspace">&nbsp;</td>
                            <td rowspan="2" class="hour adulti">Adulti</td>
                            <td rowspan="2" class="time">19:00 - 20:00</td>
                        </tr>
                        <tr>
                            <td class="time" rowspan="2">19:30 - 20:30</td>
                            <td rowspan="2" class="hour principianti">Principianti &amp; Adulti</td>
                            <td rowspan="2" class="hour principianti">Principianti &amp; Adulti</td>
                            <td rowspan="2" class="hour principianti">Principianti &amp; Adulti</td>
                            <td rowspan="2" class="hour principianti">Principianti &amp; Adulti</td>
                        </tr>
                        <tr>
                            <!--td class="time">20:00 - 20:30</td-->
                            <td rowspan="3" class="hour empty">&nbsp;<br/>&nbsp;<br/>&nbsp;</td>
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
                </center>
            </div>
        </div>
        <div class="row">
        	<div class="col-xs-12">
        		<h3>luglio</h3>
        	</div>
        </div>
        <div class="row">               
        	<div class="col-xs-12">
            <center>
                <table>
                    <thead>
                    <tr><th class="dayh">Ora</th>
                        <th class="dayh w100p"><span class="nomobile">Luned&igrave;</span><span class="mobile">Lu</span></th>
                        <th class="dayh w100p"><span class="nomobile">Marted&igrave;</span><span class="mobile">Ma</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Mercoled&igrave;</span><span class="mobile">Me</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Gioved&igrave;</span><span class="mobile">Gi</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Venerd&igrave;</span><span class="mobile">Ve</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Sabato</span><span class="mobile">Sa</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh">Ora</th>
                        </tr>
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
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </center>
            </div>
        </div>
        <div class="row">
        	<div class="col-xs-12">
        		<h3>agosto</h3>
        	</div>
        </div>
        <div class="row">               
            <center>
                <table>
                    <thead>
                    <tr><th class="dayh">Ora</th>
                        <th class="dayh w100p"><span class="nomobile">Luned&igrave;</span><span class="mobile">Lu</span></th>
                        <th class="dayh w100p"><span class="nomobile">Marted&igrave;</span><span class="mobile">Ma</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Mercoled&igrave;</span><span class="mobile">Me</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Gioved&igrave;</span><span class="mobile">Gi</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh w100p"><span class="nomobile">Venerd&igrave;</span><span class="mobile">Ve</span><br/><a href="./aikidorimini.php">Rimini</a></th>
                        <th class="dayh w100p"><span class="nomobile">Sabato</span><span class="mobile">Sa</span><br/><a href="./aikidopesaro.php">Pesaro</a></th>
                        <th class="dayh">Ora</th>
                        </tr>
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
            </center>
        </div>
        <div class="row">               
                <div class="notice"><a name="note"><i class="fa fa-bookmark-o"></i></a> per motivi organizzativi, le persone interessate e gli ospiti di altri Gruppi di Pratica interessati a partecipare
                sono cortesemente invitate ad annunciare la propria presenza tramite e-mail (info@onohaittoryuitalia.org) o telefono (3405996157).</div>
        </div>
	</div><!-- container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
</body>
</html>