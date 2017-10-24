<?php
 class manusia {
 	public $mata;
 	public $berat;

 	public function set_mata ($mata){
 		$this->mata =$mata;
 	}
 	public function get_mata(){
 		return $this->mata;
 	}
 }
 $mata1=new manusia;
 $mata1->set_mata(2);
 echo"mata manusia ada :".$mata1->get_mata().'</br>';
 ?>