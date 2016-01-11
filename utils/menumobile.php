<?php
    $current = $_SERVER['SCRIPT_NAME'];
    $isaikido = "inactive";
    if (substr($current,15,6) == "aikido")
        $isaikido = "active";
    $s->getNextSeminar();

?>
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar bgcolrenbukai"></span>
              <span class="icon-bar bgcolrenbukai"></span>
              <span class="icon-bar bgcolrenbukai"></span>
            </button>
            <a class="navbar-brand mobile" href="#">&nbsp;<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span><br/>oggi</a>
            <a class="navbar-brand mobile" href="">&nbsp;<span class="glyphicon glyphicon-copy" aria-hidden="true"></span><br/>stage</a>
            <a class="navbar-brand mobile" href="">&nbsp;<span class="glyphicon glyphicon-comment" aria-hidden="true"></span><br/>news</a>
          </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="./index.php">home</a></li>
                <li><a href="./aikidomain.php">aikido</a></li>
                <li><a href="./onohaittoryu.php">onoha itto ryu</a></li>
                <li><a href="./insegnante.php">insegnante</a></li>
                <li><a href="./orario.php">orario</a></li>
                <li><a href="./dojo.php">dojo</a></li>
                <li><a href="./seminari.php#<?php echo $s->sid;?>">attivit&agrave;</a></li>
                <li><a href="./gallery.php">foto</a></li>
                <li><a href="./news.php">news</a></li>
                <li><a href="./links.php">links</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="secondarymenu" class="sidebar__link_list">
    <ul class="<?php echo $isaikido; ?>">
        <!--li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikido.php">l'aikido</a></div></li-->
        <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidopesaro.php">aikido Renbukai Pesaro</a></div></li>
        <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidorimini.php">aikido Renbukai Rimini</a></div></li>
        <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidoinsegnante.php">insegnante</a></div></li>
        <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidoiscrizioni.php">iscrizioni</a></div></li>
    </ul>
</div>
