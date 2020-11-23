<?php 

Class date {
  
  private $day;
  private $month;
  private $year;

  public function __Construct() {
  	$this->day = '1';
  	$this->month = '1';
  	$this->year = '2018';
  }

  public function advance() {
  	$dia = $this->day + 1;
  	if($dia>31){
  		$mes = $this->month + 1;
  		$dia = 1;
  		if($mes>12){
           $anio = $this->year + 1;
           $mes = 1;
  		}
  	} else {
  		$mes = $this->month;
  		$anio = $this->year;
  	}

  	return $dia.'/'.$mes.'/'.$anio;
  }
 
  }

$dia = new date();

echo $dia->advance(); 
 ?>
