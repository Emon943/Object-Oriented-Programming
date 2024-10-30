<?php
/**
* 
*/
class Motiur{
	public $n;
	public $a;
	
	function __construct($name,$age)
	{
	 $this->n=$name;
	 $this->a=$age;
		echo $name."<br/>";
		echo $age."<br/>";
	}
	function display($city){
       echo $this->n."<br/>";
       echo $this->a."<br/>";
       echo $city;
	}

}
$obj=new Motiur;
$obj->("motiur",25);
$obj->display("Rajshahi");
?>
