
<?php
    setlocale(LC_TIME, 'ita');
    //date_default_timezone_set('Europe/Rome');
    date_default_timezone_set('UTC');
	include("./utils/class.utils.php");
    include("./utils/class.seminar.php");
    $s = new seminar();
    $s->setSource("./calendar/gruppo.json");
    $util = new utils();
    $today = date('Y-m-d');
    $MAXCOL = 3;

    function sort_by_start_asc($a, $b) {
        $dA = strtotime($a['start']);
        $dB = strtotime($b['start']);

        return $dA - $dB;
    }   

    function sort_asc($a, $b) {

        return strcmp($a, $b);
    }   

	function select_diretto($name = "") {
	    return function($elem) use($name) { if(strcmp($name,"*")==0) return true; if(strpos($elem['diretto'],$name,0) === false) return false; return true; };
	}

	$all = $s->getSeminars();
	$from = date("Y", strtotime($all[0]['start']));
	$to = date("Y", strtotime($all[count($all)-1]['end']));
	$instructors = $s->getInstructors();
	$ni = count($instructors);
	if($ni >= 1){
		usort($instructors,"sort_asc");
		$ddin = "<div class='controls'>insegnante: <select class='form-control instructor' id='instructor' name='instructor'>";
		for($nii = 0; $nii < $ni; $nii++)
			$ddin = $ddin . "<option  value='$instructors[$nii]'>" . $instructors[$nii] . "</option>";
		$ddin = $ddin . "</select></div>";
	}

	$locations = $s->getLocations();
	$nl = count($locations);
	if($nl >= 1){
		usort($locations,"sort_asc");
		$ddloc = "<div class='controls'>";
		$ddloc = $ddloc ."citt&agrave;: <select class='form-control' name='location'>";
		$ddloc = $ddloc . "<option  value='null' selected></option>";
		for($nli = 0; $nli < $nl; $nli++)
			$ddloc = $ddloc . "<option  value='$locations[$nli]'>" . $locations[$nli] . "</option>";
		$ddloc = $ddloc . "</select></div>";
	}

	if(isset($_POST['i'])){
		$filter = str_replace("M° ", "", $_POST['i']);
		$sem = array_filter($all,select_diretto($filter));
		//exit();
	}
	else if (isset($_POST['l'])){
		$filter = $_POST['l'];
		$sem = array_filter($all,select_diretto($filter));
		//exit();
	} else
		$sem = $all;


?>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>calendario </title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<link rel="stylesheet" media="screen" href="css/main.css" /> <!--Load CSS-->
	<link rel="stylesheet" media="screen" href="css/cal.css" /> <!--Load CSS-->
<style>
    .weekday {display: table-cell;font-variant: small-caps; transform: rotate(-90deg); margin-top: 25px;margin-right: -50px;text-align: center;}
    .day{display: table-cell;font-size: 50px; text-align: right; padding-top: 25px}
    .col_date, .col_1, .col_2, .col_3 {display: table-cell; text-align: left;  font-family: "Open Sans Condensed"}
    .col_date{border: 1px solid silver; }
    .sem_on {border-left: 4px solid #005493; border-right: 4px solid #005493; }
    .sem_on_top {border-top: 4px solid #005493; border-left: 4px solid #005493; border-right: 4px solid #005493; 
    	border-top-left-radius: 8px; border-top-right-radius: 8px;}
    .sem_on_bottom {border-bottom: 4px solid #005493; border-left: 4px solid #005493; border-right: 4px solid #005493; 
    	border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;}
    .sem_on_unique {border: 4px solid #005493;  border-radius: 8px;}
    .day, .col_date, .col_1, .col_2, .col_3 {height: 80px; }
    .col_1, .col_2, .col_3 {padding-top: 10px; margin-left: 2px; margin-right: 2px}
</style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    

<script type="text/javascript">
$(function() {
	$('.instructor').on('change', function(){
   	 var selected = $(this).find("option:selected").val();
   	 var dataForm = "i=" + selected;
   	    $.ajax({
	       type: "POST",
    	    url: location.href,
          	data: dataForm
        });
   	 	return false;
  	});
});
</script>

</head>
<body>
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
			<h3>Seminari <?php echo $from . " - " . $filter; ?><?php echo "[" . $_GET['i'] ."]";?><?php echo "(" . $_POST['i'] . ")";?></h3>
			<div class="col-lg-12">
    		  	<?php

    		  		
//    		  		$sem = array_filter($all,select_diretto("Foglietta"));

    		  		$num = count($sem);
                    if($num > 1){
                        usort($sem, 'sort_by_start_asc');

						$activesem = array();
						$delsem = array();
						$col = array();

						$oneday = 60*60*24;
						$init = $sem[0]['start'];
						$inittime = strtotime($init);
						$end = $sem[0]['end'];
						$endtime = strtotime($end);
						$daytime = $inittime;
						$thismonth = date("m",$inittime);
						$i = 0;
						echo "<form class='form form-horizontal' enctype='multipart/form-data method='post'>";
						echo "<div class='row'><div class='col-lg-6'>" .$ddin  . "</div><div class='col-lg-6'>" .$ddloc  . "</div></div>";
						echo "</form>";
						echo "<div class='seminarlist'>";
						echo "<div class='row'><div class='col-lg-12 monthname'><h3>" . date("M",$daytime) . " " . date("Y",$daytime) . "</h3></div></div>";
						while($daytime <= $endtime || $i < $num){
							/* add seminarts starting on this day */
							/* <= to handle change of hours */
							while($i < $num && strtotime($sem[$i]['start']) <= $daytime){
								//echo "new sem: " . $sem[$i]['diretto'] . " @ " . $sem[$i]['città'];

								array_push($activesem,$sem[$i]);	
								/* get the ending date: the last starting seminar is not necessarily the last ending seminar */
								if($endtime < strtotime($sem[$i]['end']))
									$endtime = strtotime($sem[$i]['end']);
								/* store the column where the seminar will appear: it depends on how */
								/* many active seminars are there already */
								/* col[$x]+1 is the column where seminar $x appears */
								$p = count($activesem);
								$sid = $sem[$i]['start'] . $sem[$i]['diretto'] . ":" . $p;
								array_push($col,$sid);			
								$i++;
							}
							/* all seminars either already started or starting today are now in the activesem array */
							$numa = count($activesem);
							if($numa > 0 || date("w",$daytime)==0 || date("w",$daytime)==6){
								if(date("m",$daytime) != $thismonth){
									$thismonth = date("m",$daytime);					
									echo "<div class='row'><div class='col-lg-12 monthname'><h3>" . date("M",$daytime) . " " . date("Y",$daytime) . "</h3></div></div>";
								}
						        echo "<div class='row'>";
						       // echo "  <div class='col_date col-md-1'>";
					        	echo "  <div class='weekday col-md-1'>" . strtolower(date("D",$daytime)) . "</div>";
					        	echo "  <div class='day col-md-1'>" . date("d",$daytime) . "</div>";
						       // echo "  </div>";
					        	/* printout information on active seminars */
					        	/* already started seminars, just an empty sem_on box, the starting ones with the title */
					        	$tabcol = 1;
					        	foreach ($activesem as $key => $s) {
					        		/* active seminars are naturally ordered w.r.t. starting time = columns */
					        		/* fetch column */
					        		foreach($col as $keyc => $pos){
					        			if(substr($pos, 0, strpos($pos, ":")) === $s['start'] . $s['diretto'])
					        				$colsem = substr($pos, strpos($pos, ":")+1);
					        		}
				        			if(strtotime($s['start']) == $daytime){
				        				$strtitle = "" . $s['title'] . "<br/>" . $s['diretto'] . " @ " . $s['città'] ."";
				        				if(strtotime($s['end']) == $daytime)
				        					$celltype = "_unique'>";
				        				else
				        					$celltype = "_top'>";
				        			} else {
										$strtitle = "";
				        				if(strtotime($s['end']) == $daytime)
					        				$celltype = "_bottom'>";
					        			else
					        				$celltype = "'>";			        				
				        			}
					        		/* if we are in the right column */
					        		if($colsem == $tabcol){
					        			echo "<div class='col_" . $tabcol . " col-md-3 sem_on";
					        			echo $celltype . $strtitle; 
					        			echo "</div>";
						        		$tabcol++;
					        		} elseif($colsem == $tabcol + 1) {
					        			/* there is an empty slot by an already finished seminar */
					        			echo "<div class='col_" . $tabcol . " col-md-3'>&nbsp;</div>";
					        			echo "<div class='col_" . ($tabcol + 1) . " col-md-3 sem_on";
					        			echo $celltype . $strtitle; 
					        			echo "</div>";
					        			$tabcol += 2;
					        		}elseif($colsem == $tabcol + 2) {
					        			/* there is an empty slot by an already finished seminar */
					        			echo "<div class='col_" . $tabcol . " col-md-3'>&nbsp;</div>";
					        			echo "<div class='col_" . ($tabcol + 1) . " col-md-3'>&nbsp;</div>";
					        			echo "<div class='col_" . ($tabcol + 2) . " col-md-3 sem_on";
					        			echo $celltype . $strtitle; 
					        			echo "</div>";
					        			$tabcol += 3;
					        		}
	//		                        echo "<div class='col_" . $j . " col-md-3 sem_on'>";
	//		                        echo $sem[$i]['titolo'] . " " . $sem[$i]['diretto'] . " @ " . $sem[$i]['città'];
	//		                        echo "</div>";

					        		/* prepare to del seminars that end on this day */;
					        		if(strtotime($s['end']) <= $daytime){
					        			//echo "to be deleted: " . $s['end'] ."<br/>";
					        			array_push($delsem, $key);
					        		}
					        	}
					        	for(;$tabcol <= $MAXCOL; $tabcol++)
					        		echo "<div class='col_" . $tabcol . " col-md-3'>&nbsp;</div>";
	//				        	for($i = 0; $i < count($activesem); $i++)
	//				        		echo "i: $i - " . $activesem[$i]['diretto'] . "<br/>";
					        	echo "</div>";
					        	/* cleanup seminars  */
					        	foreach ($delsem as $key => $ds){
					        		//echo "del sem: " . $activesem[$ds]['diretto'] . " @ " . $activesem[$ds]['città'];
					        		unset($activesem[$ds]);
					        	}
					        	unset($delsem);
					        	$delsem = array();
					        	$numa = count($activesem);
					        	/* separator for end of the weekend  */
					        	if($numa == 0 && date("w",$daytime)!=6){
							        echo "<div class='row'>";
							        echo "  <div class='col-md-12'><hr/></div>";
						        	echo "</div>";

					        	}
							}
							$daytime = $daytime + $oneday;

						}
						echo "</div>";
					}
				?>
               </div><!-- col-lg-12 -->
            </div><!-- row -->
	</div><!-- container -->
</body>
</html>				