<?php 

class Bar extends Foo {

	public function baz()
	{
		return 'qux';
	}

	//foobar() must be created because of Foo class
	public function foobar()
	{
		return 'barqux';
	}
}