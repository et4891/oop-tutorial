<?php 

class Foo {

	public static $foo = 'foobar';
	public $bar = 'thisBar';

	public static function hello(){

		// return $this->bar; will not work because $this does not work inside static
		// statics does not access instances / variables
		return 'Hello World';
	}
}