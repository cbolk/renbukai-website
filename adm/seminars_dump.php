<?php 
	include("../utils/class.utils.php");
    include("../utils/class.seminar.php");
    $s = new seminar();
    $s->setSource("../json/seminari.json");
    $u = new utils();

	/* do the insertion */
	$s->firstday = $u->it2date($_POST["giornoinizio"]); 
	$s->id = $s->firstday;
	$s->lastday = $u->it2date($_POST["giornofine"]); 
	$s->instructor = str_replace("°","&deg;",$_POST["diretto"]);		
	$s->title = $u->fixAccents($_POST["titolo"]);		
	$s->address = $u->fixAccents($_POST["indirizzo"]);		
	$s->city = $u->fixAccents($_POST["città"]);		
	$s->dojo = $_POST["indirizzo"];		
	$s->image = $_POST["immagine"];		
	$s->pdf = $_POST["locandina"];		
	
	$ris = $s->add();
	return str_replace("-", "", $ris);
?>
