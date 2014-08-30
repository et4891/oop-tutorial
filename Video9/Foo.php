<?php 
// abstract class is to define a basic skeleton for classes to derive from.
abstract class Foo {

	public function bar()
	{
		return 'foobar';
	}

	// foobar is an abstract function so any class extends Foo class must have this foobar() method included
	abstract public function foobar();
}