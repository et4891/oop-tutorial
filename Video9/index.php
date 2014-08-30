<?php

require 'Foo.php';
require 'Bar.php';

$bar = new Bar();
echo $bar->baz();		//print qux

//Bar class can access Foo class since Bar class extends Foo class
echo $bar->bar();		//print foobar

echo $bar->foobar();