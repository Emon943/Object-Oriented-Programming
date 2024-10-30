<?php
class A{
	private $age=12;
	public $name="motiur";
}
class B extends A{
	function test(){
		//echo $this->age;
		echo $this->name ."<br/>";

	}
}
$obj=new B();
$obj->test();
?>



<?php
//polimorphism same mathod but different output
class Bird{
	public function fly(){
		echo"Fly method of bird class called"."<br/>";
	}}
	class Eagle extends Bird{
		public function fly(){
			echo"Fly method of Eagle class called"."<br/>";
		}}
		class Swift extends Eagle{
			public function fly(){
				echo"Fly method of Switf class called"."<br/>";
			}}
			$o=new Bird();
			$obj=new Eagle();
			$ob=new Swift();
			$obj->fly();
			$ob->fly();
			$o->fly();
?>


<?php
//Encapsulation
 class Hide{
 	private $age=20;
 	public function Encap(){
 	 return $this->age;
 	}
}
 	$obj=new Hide();
 	//echo $obj->age;//Encapsulation not possible aceess
 	echo $obj->Encap();//access possible by function call
?>



