<?php
/* 
A domain Class to demonstrate RESTful web services
*/
Class Mobile {
	
	private $mobiles = array(
		1 => 'Crvena',  
		2 => 'Crna');
		
	/*
		you should hookup the DAO here
	*/
  //dodaj sve funkcije
	public function getAllMobile(){
		return $this->mobiles;
	}
	
	public function getMobile($id){
		
		$mobile = array($id => ($this->mobiles[$id]) ? $this->mobiles[$id] : $this->mobiles[1]);
		return $mobile;
	}	

  public function postMobile($mobile)
  {
    array_push($this->mobiles, $mobile);
  }

  public function updateMobile($index, $mobile)
  {
    $replacements = array($index => $mobile);
    array_replace(this->mobiles,$replacements);
  }

  public function deleteMobile($index)
  {
    unset($this->array[$index]);
  }
}
?>