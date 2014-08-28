<?php 

// every property in class Bird is inherited to class Pigeon
class Penguin extends Bird {

	public function foo()
	{
		// if this legCount propery in Bird class is public/protected then this will work
		// this will not work if the legCount property is private in Bird class
		echo $this->legCount;
	}
}

 ?>