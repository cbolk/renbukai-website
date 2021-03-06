<?php

	class utils {


		function dowInItalian($dow){
			$dowMap = array('dom', 'lun', 'mar', 'mer', 'gio', 'ven', 'sab');
			return $dowMap[$dow];
		}

		function dowlongInItalian($dow){
			$dowMap = array('domenica', 'luned&igrave;', 'marted&igrave;', 'mercoled&igrave;', 'gioved&igrave;', 'venerd&igrave;', 'sabato');
			return $dowMap[$dow];
		}

		function getStartAcademicYear($date){
			if(date('m', strtotime($date)) >= 8)
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
		

		function longDate($day){
			setlocale(LC_TIME, 'ita');
			date_default_timezone_set('Europe/Rome');
			$ld = $this->dowInItalian(date('w', strtotime($day)));
			$ld = $ld . " " . ltrim(date('d', strtotime($day)), '0') . " " . $this->getMonthNameFromNumber(date('m', strtotime($day))) . ", " . date('Y', strtotime($day));
			return $ld;
		}
	
		function medDate($day){
			$ld = $this->dowInItalian(date('w', strtotime($day)));
			$ld = $ld . " " . ltrim(date('d', strtotime($day)), '0') . " " . $this->getMonthMedNameFromNumber(date('m', strtotime($day))) . ", " . date('Y', strtotime($day));
			return $ld;
		}

		function shortDate($day){
			$ld = $this->dowInItalian(date('w', strtotime($day)));
			$ld = $ld . " " . ltrim(date('d', strtotime($day)), '0') . " " . $this->getMonthMedNameFromNumber(date('m', strtotime($day))) . " " . date('Y', strtotime($day));
			return $ld;
		}

		function vDate($day){
			$ld = "<div class='semdate'>" . ltrim(date('d', strtotime($day)), '0') . "<br/>" . $this->getMonthMedNameFromNumber(date('m', strtotime($day))) . "<br/>" . date('Y', strtotime($day)) . "</div>";
			return $ld;
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


		function it2date($date){
			/* 13-01-2016 --> 2016-01-13 */
			$y = substr($date, 6, 4);
			$m = substr($date, 3, 2);
			$d = substr($date, 0, 2);
			return $y . '-' . $m . '-' . $d; 
		}

		function fixAccents($val)
		{
			$vowelssrc = array("a'", "e'", "i'", "o'", "u'", "A'", "E'", "I'", "O'", "U'");
			$vowelsdst = array("à", "è", "ì", "ò", "ù", "À", "È", "Ì", "Ò", "Ù");
			return str_replace($vowelssrc,$vowelsdst,$val);

		}

		function date2monthday($date){
			$out = "<span class='month'>". $this->getMonthMedNameFromNumber(date('m', strtotime($date)));
			$out = $out ."</span><br/><span class='day'>" . date('d', strtotime($date)) . "</span>";
			return $out;
		}

		function exists_in_array($arr, $val){
			$num = count($arr);
			for($i = 0 ; $i < $num; $i++)
				if($arr[$i] == $val)
					return $i;
			return false;
		}

		function isHoliday(){
			$holidays = ['01-01', '01-06', '04-25', '05-01', '06-02', '08-15', '11-01', '11-02', '12-08', '12-25'];
			$pesaro = ['09-24'];
			$rimini = ['10-14'];
			$easter = ['04-17'];

			$today = Date('Y-m-d');
			$md = substr($today, 5);
			if (in_array($md, $easter) || in_array($md, $pesaro) || in_array($md, $rimini) || in_array($md, $holidays)) 
				return true;
			return false;

		}


	}
?>