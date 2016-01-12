<?php
	$current = $_SERVER['SCRIPT_NAME'];
	$isaikido = "inactive";
	if (substr($current,15,6) == "aikido")
		$isaikido = "active";
?>
<ul id="menu" class="sidebar__link_list">
    <li class="nomobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./index.php">home</a></div></li>
    <li class="nomobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidomain.php">aikido</a></div></li>
    <li class="mobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidopesaro.php">aikido Renbukai Pesaro</a></div></li>
    <li class="mobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidorimini.php">aikido Renbukai Rimini</a></div></li>
    <li class="mobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidoinsegnante.php">insegnante</a></div></li>
    <li class="mobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidoiscrizioni.php">iscrizioni</a></div></li>
    <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./onohaittoryu.php">onoha itto ryu</a></div></li>
    <li class="nomobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./dojo.php">dojo</a></div></li>
    <li class="nomobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./insegnante.php">insegnante</a></div></li>
    <li class="nomobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./orario.php">orario</a></div></li>
    <li class="nomobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./seminari.php">attivit&agrave;</a></div></li>
    <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./gallery.php">foto</a></div></li>
    <li class="nomobile sidebar__link_item"><div class="sidebar__link_item__name"><a href="./news.php">news</a></div></li>
    <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./links.php">links</a></div></li>
</ul>
<div id="secondarymenu" class="sidebar__link_list">
    <ul class="<?php echo $isaikido; ?>">
        <!--li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikido.php">l'aikido</a></div></li-->
        <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidopesaro.php">aikido Renbukai Pesaro</a></div></li>
        <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidorimini.php">aikido Renbukai Rimini</a></div></li>
        <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidoinsegnante.php">insegnante</a></div></li>
        <li class="sidebar__link_item"><div class="sidebar__link_item__name"><a href="./aikidoiscrizioni.php">iscrizioni</a></div></li>
    </ul>
</div>