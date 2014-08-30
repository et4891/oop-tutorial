<?php 

class Foo {

	public function bar()
	{
		echo 'foobar<br>';
		return $this;  //error will occur if this is not here
	}

	public function baz()
	{
		echo 'foobaz';
	}
}