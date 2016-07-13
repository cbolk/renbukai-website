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
    <title>associazione renbukai - oir</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->

</head>
<body id="onohaittoryu">
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
    		<h3>Onoha Itto Ryu</h3>
        </div>
        <div class="row">
        	<div class="col-xs-12">
                <h4>Cenni storici</h4>
                <p>L'origine dell'Ittō Ryū risale alla seconda metà del ‘500, un'epoca di forti tensioni, caratterizzata da continue lotte di potere tra i signori della guerra, tra i quali spiccano i nomi di Oda Nobunaga, Toyotomi Hideyoshi e Tokugawa Ieyasu, nella loro ambizione di unificare il Giappone sotto un'unico dominio.</p>
                
                <p>Nonostante numerose ipotesi, poco si conosce delle origini di Itō Ittōsai Kagehisa (1550?-?) e ancora meno della sua misteriosa scomparsa. </p>
                <p>Ciò che sembra certo è il suo apprendistato presso Kanemaki Jisai, maestro di Chujō Ryū e fondatore a sua volta del Kanemaki Ryū, e il suo successivo pellegrinaggio (Mushashugyō) costellato di numerose sfide e duelli, tutti vittoriosi, attraverso il quale acquisisce in vita la fama di maestro di spada imbattibile e “Primo sotto il cielo” (Tenkaichi).</p>
                
                <p>Prima della sua misteriosa scomparsa, i suoi due migliori discepoli, Ono Zenki e Mikogami Tenzen (1569?-1628), in una memorabile sfida all'ultimo sangue, si disputarono la successione.</p>
                <p>Mikogami Tenzen, che ne uscì vittorioso, prese in seguito il nome di Ono Jirōemon Tadaaki e creò il sistema di spada Onoha Ittō Ryū Kenjutsu in quanto, pur insegnando la sua arte, Itō Ittōsai Kagehisa non formalizzò mai il suo stile.</p>
                <p>Per questo l'Onoha Ittō Ryū riconosce in Itō Ittōsai Kagehisa, il suo ideatore (Ganso), e nel suo successore Ono Jirōemon Tadaaki, il fondatore (Ryūso), che denominò e formalizzò lo stile.</p>
                
                <p>La fama dell'Onoha Ittō Ryū si diffuse ben presto e Ono Jirōemon Tadaaki venne scelto come Maestro d'armi della casata degli Shogun Tokugawa.</p>
                <p>Da allora l'Onoha Ittō Ryū Kenjutsu divenne una delle due scuole di spada ufficiali per la formazione dei samurai dello Shogun formando nel tempo maestri di spada leggendari che lasciarono una profonda impronta nella storia del Giappone.</p>
                
                <p><strong>Il novecento</strong></p>
                
                <p>Nei primi decenni del ‘900 il sedicesimo Caposcuola (Sōke) dell'Onoha Ittō Ryū Kenjutsu, Sasamori Junzō (1886-1976), grande maestro dell'arte della spada, importante uomo di cultura ed educatore, deputato e ministro nel Giappone del dopoguerra, fu tra coloro che diedero un contributo decisivo alla nascita della moderna Via della Spada giapponese, il Kendo.</p>
                <p>Questo permise la sopravvivenza di una pratica altrimenti destinata, con molta probabilità, a scomparire e allo stesso tempo di preservare un nucleo spirituale e tradizionale verso il quale il Kendo potesse rivolgersi alla ricerca del suo senso più profondo.</p>
                
                
                <p><strong>Il presente</strong></p>
                
                <p>L'attuale caposcuola dell'Onoha Ittō Ryū Kenjutsu, il diciasettesimo Sōke Sasamori Takemi, nella sua duplice veste di uomo di spada e di pastore, è testimone del profondo significato spirituale di una pratica fortemente radicata nella tradizione giapponese, ma allo stesso tempo capace di proiettarsi in aperture che trascendono gli angusti confini geografici e culturali.</p>
                
                <p>Ai giorni nostri, l'Onoha Ittō Ryū Kenjutsu viene praticato dai massimi esperti di Kendo per tornare alle "origini" e ritrovare lo spirito della spada che si rischia di smarrire con il sopravanzare dell'aspetto sportivo. </p>
                <p>Viene tuttavia praticato anche da esperti di altre discipline marziali giapponesi alla ricerca delle origini delle proprie linee di movimento e da cultori della tradizione della spada giapponese anche per il suo carattere di profonda pratica interiore.</p>

                <h4>Il nome</h4>
                <p>Fu Ono Jirōemon Tadaaki, designato da Itō Ittōsai Kagehisa come suo diretto successore, che, oltre a sistemarne le tecniche, chiamò lo stile “Onoha Ittō Ryū Kenjutsu” riconoscendo in Itō Ittōsai Kagehisa il suo ideatore.</p>

                <p>Negli oltre quattrocento anni di storia della scuola, alcuni maestri di Onoha Ittō Ryū Kenjutsu hanno fondato altre scuole pur rimanendo nel solco della tradizione Ittō Ryū ed è per questo che queste scuole hanno mantenuto nella loro denominazione il termine Ittō Ryū.</p>

                <p>Con il termine Ittō Ryū, ovvero lo "stile di una spada", nel suo significato letterale, si intende non "una spada" in senso oggettivo e quantitativo, bensì il diventare Uno con la Spada per raggiungere, attraverso la pratica, un orizzonte in cui non vi è più distinzione tra la spada e colui che la brandisce, ma solo l'imperturbabile armonia nell'incessante ciclo dell'Uno/Molteplice.</p>

                <p>L'Uno parte del Molteplice, ma che allo stesso tempo lo genera nell'armonia circolare dell'Universo che il vero significato del nome e il simbolo della scuola rappresenta.</p>

                <p>Solo così il "Setsunin tō" (Spada che dona la Morte) diviene "Katsujin ken" (Spada che dona la Vita), conducendo il praticante al senso ultimo, apparentemente paradossale, del cammino dell'uomo di spada:<br/>
                "Il vero Maestro di spada è colui che, superati i confini della vittoria e della sconfitta, posa la spada e diviene uomo di pace".</p>
    				<p>Per maggiori informazioni visita il sito <a href="http://www.onohaittoryuitalia.org" target=_blank>www.onohaittoryuitalia.org</a>.</p>
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
</body>
</html>