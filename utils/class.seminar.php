<?php
class seminar {
    public $srcfile; 
    
	public $sid;
    public $firstday;
    public $lastday;
    public $dates;
    public $dojo;
    public $title;
    public $address;
    public $city;
    public $pdf;
    public $image;
    public $instructor;
    
    public function setSource($file) {
        $this->srcfile = $file;
    }

    private function getDirectory($path) {
        return scandir($path);
    }
    
    private static function sort_by_date_asc($a, $b) {
    	$dA = strtotime($a['giornoinizio']);
    	$dB = strtotime($b['giornoinizio']);

    	return $dA - $dB;
	}   

    private static function sort_by_date_desc($a, $b) {
    	$dA = strtotime($a['giornoinizio']);
    	$dB = strtotime($b['giornoinizio']);

    	return $dB - $dA;
	}   	

	 
	public function getSeminars($sorted){
		$string = file_get_contents($this->srcfile);
		$json_a = json_decode($string, true);
		if($sorted)
			if(count($json_a) > 0)
				usort($json_a, array('seminar','sort_by_date_asc'));				
			
			
		return $json_a;
	} 

	 	 
	public function getNextNSeminars($n){
		$util = new utils();
	
		$string = file_get_contents($this->srcfile);
		$json_a = json_decode($string, true);
		if(count($json_a) > 0){
			usort($json_a, array('seminar','sort_by_date_asc'));
			$today = date("Y-m-d");
			$i = 0;
			$ss = array();
			foreach ($json_a as $s => $sem) {
				$firstday = $sem['giornoinizio'];
				if($firstday > $today){
					$sid = str_replace("-","",$sem['giornoinizio']);
					$lastday = $sem['giornofine'];
					$y = substr($firstday,0,4);
					$m = substr($util->getMonthMedNameFromNumber(substr($firstday,5,2)),0,3);
					$d = substr($firstday,8,2);	
					$y2 = substr($this->lastday,0,4);
					$m2 = substr($util->getMonthMedNameFromNumber(substr($lastday,5,2)),0,3);
					$d2 = substr($this->lastday,8,2);
					if(strcmp($d,$d2) == 0)
						$dates = $d . " " . $m . " " . $y;
					else if (strcmp($m,$m2) != 0)
						$dates = $d . "-" . $d2 . " " . $m . " " . $y;
					else	
						$dates = $d . " " . $m . "-" . $d2 . " " . $m2 . " " . $y;
					$ss[$i] = $sem;
					$ss[$i]['dates'] = $dates;
					$ss[$i]['sid'] = $sid;					
					$i++;
					if($i == $n)
						return $ss;
				}
			}
		}
	}  
	
	public function getNextSeminar(){
		$util = new utils();
	
		$string = file_get_contents($this->srcfile);
		$json_a = json_decode($string, true);
		if(count($json_a) > 0){
			usort($json_a, array('seminar','sort_by_date_asc'));
			$today = date("Y-m-d");
			foreach ($json_a as $s => $sem) {
				$firstday = $sem['giornoinizio'];
				if($firstday > $today){
					$this->sid = str_replace("-","",$sem['giornoinizio']);
					$this->firstday = $sem['giornoinizio'];
					$this->lastday = $sem['giornofine'];
					$y = substr($firstday,0,4);
					$m = substr($util->getMonthMedNameFromNumber(substr($firstday,5,2)),0,3);
					$d = substr($firstday,8,2);	
					$y2 = substr($this->lastday,0,4);
					$m2 = substr($util->getMonthMedNameFromNumber(substr($this->lastday,5,2)),0,3);
					$d2 = substr($this->lastday,8,2);
					if(strcmp($d,$d2) == 0)
						$this->dates = $d . " " . $m . " " . $y;
					else if (strcmp($m,$m2) != 0)
						$this->dates = $d . "-" . $d2 . " " . $m . " " . $y;
					else	
						$this->dates = $d . " " . $m . "-" . $d2 . " " . $m2 . " " . $y;
					$this->title = $sem['titolo'];
					$this->instructor = $sem['diretto'];
					$this->dojo = $sem['dojo'];
					$this->address = $sem['indirizzo'];
					$this->city = $sem['città'];
					$this->pdf = $sem['locandina'];
					$this->image = $sem['immagine'];
				}
			}
		}
	} 
	 	
	public function getInstructors(){
		$u = new utils();
		$string = file_get_contents($this->srcfile);
		$json_a = json_decode($string, true);
		$in = array();
		foreach ($json_a as $key => $s){
			$dir = $s['diretto'];
			$names = split("&amp;", $dir);
			$nin = count($names);
			for($i = 0; $i < $nin; $i++){
				//echo trim($names[$i]);
				if($u->exists_in_array($in,trim($names[$i])) === false)
					array_push($in, trim($names[$i]));
				}
		}
		return $in;
	} 

	public function getLocations(){
		$u = new utils();
		$string = file_get_contents($this->srcfile);
		$json_a = json_decode($string, true);
		$in = array();
		foreach ($json_a as $key => $s){
			$dir = $s['città'];
			if($u->exists_in_array($in,trim($dir)) === false)
				array_push($in, trim($dir));
		}
		return $in;
	} 

	
}
?>