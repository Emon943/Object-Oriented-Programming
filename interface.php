<?php


class Doc implements Sort{      //sort class implements doc class mathod
	
  public function getContent(){   //implement getContent functiom
	$abc="this my first test";
	return $abc;
	}
}
$test= new Doc;            //create object of doc class
echo $test->getContent(); //call content function
?>