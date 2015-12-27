<?php

	class utils {

    	function getSchedule($day){
		  	$month = date('m', strtotime($day));
	   			if($month == 7 || $month == 8 || $month == 9)
	   				return "0" . $month;
	   			return "10";
    	}

		function getStartAcademicYear($date){
			if(date('m', strtotime($date)) >= 9)
				$year = date('Y', strtotime($date));
			else
				$year = date('Y', strtotime($date)) - 1;
			return $year;

		}

		function getEndAcademicYear($date){
			if(date('m', strtotime($date)) >= 9)
				$year = date('Y', strtotime($date)) + 1;
			else
				$year = date('Y', strtotime($date));
			return $year;

		}

		function getMonthNameFromNumber($month)
		{
				$trans = array (
				    'January'   => 'gennaio',
				    'February'  => 'febbraio',
				    'March'     => 'marzo',
				    'April'     => 'aprile',
				    'May'       => 'maggio',
				    'June'      => 'giugno',
				    'July'      => 'luglio',
				    'August'    => 'agosto',
				    'September' => 'settembre',
				    'October'   => 'ottobre',
				    'November'  => 'novembre',
				    'December'  => 'dicembre',
				);
				return strtr(date('F', mktime(0,0,0,$month,1)),$trans);
		}
		
		function getMonthMedNameFromNumber($month)
		{
				return substr($this->getMonthNameFromNumber($month),0,3) . ".";
		}


		function date2monthday($date){
			$out = "<span class='month'>". $this->getMonthMedNameFromNumber(date('m', strtotime($date)));
			$out = $out ."</span><br/><span class='day'>" . date('d', strtotime($date)) . "</span>";
			return $out;
		}


	}
?>