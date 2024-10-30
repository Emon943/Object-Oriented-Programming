<?php
/**
* 
*/
class UserData
{
	public $username;
	public $useid;
	const NAME="Emon";
	static $age="25";
	
	function __construct($name,$id)
	{
	   $this->username=$name;
	   $this->userid=$id;
	   echo"User name is:{$this->username}and userid is{$this->userid}";
	}
	static function display(){
          echo"Full Name is:".UserData::NAME;
          echo "Age is:".self::$age;
	}
	function __destruct(){
		unset($this->username);
		unset($this->userid);
	} 
}
$name="Motiur";
$id="12";
$obj=new UserData($name,$id);
UserData::display();
?>