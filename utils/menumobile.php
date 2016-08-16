<?php
    $current = $_SERVER['SCRIPT_NAME'];
    $isdojo = "inactive";
    if (substr($current,15,4) == "dojo")
        $isdojo = "active";
    $s->getNextSeminar();
    $today = date("m");
    if (strcmp($today,"07") != 0 && strcmp($today,"08") != 0)
        $otarget = "aa";
    else
        $otarget = "07";
?>
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed mobile" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar bgcolrenbukai"></span>
              <span class="icon-bar bgcolrenbukai"></span>
              <span class="icon-bar bgcolrenbukai"></span>
            </button>
            <a class="navbar-brand mobile noborder" href="./index.php">&nbsp;<img class='navheader' src='./assets/logoblue.png' width='20px' /><br/>home</a>
            <a class="navbar-brand mobile noborder" href="./orario.php#<?php echo $otarget;?>">&nbsp;<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span><br/>orario</a>
            <a class="navbar-brand mobile noborder" href="./seminari.php#<?php echo $s->sid;?>">&nbsp;<span class="glyphicon glyphicon-copy" aria-hidden="true"></span><br/>stage</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="./index.php">home</a></li>
                <li><a href="./aikido.php">aikido</a></li>
                <li><a href="./onohaittoryu.php">onoha itto ryu</a></li>
                <li><a href="./insegnante.php">insegnante</a></li>
                <li><a href="./orario.php#<?php echo $otarget;?>">orario</a></li>
                <li><a href="./corsi.php">corsi</a></li>
                <li><a href="./seminari.php#<?php echo $s->sid;?>">attivit&agrave;</a></li>
                <li><a href="./gallery.php">foto</a></li>
                <li><a href="./contatti.php">contatti</a></li>
                <!--li><a href="./news.php">news</a></li-->
                <li><a href="./links.php">link</a></li>
                <li><a href="./english.php" title="information in English"><img alt='English' src='./assets/english32.png' /></a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="secondarymenu" class="sidebar__link_list">

</div>
