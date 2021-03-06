<?php 

require 'Bird.php';
require 'Pigeon.php';
require 'Penguin.php';

$bird = new Bird(true, 2);

//use the getLegCount method created in Bird.php
echo $bird->getLegCount() . '<br>'; // returns 2 which is what we entered


//pigeon class inherited what's in Bird.php
$pigeon = new Pigeon(true, 2);

if ($pigeon->canFly())
{
	echo 'Pigeon Can Fly <br>';
}

//penguin class inherited what's in Bird.php
$penguin = new Penguin(false, 2);

if (!$penguin->canFly())
{
	echo 'Penguin Cannot Fly';
}


/*changed Bird's property/variable to protected and added a public foo() to Pigeon.php*/
/*if Bird's property is set to private this will get an error*/
echo '<br>';
$penguin->foo();

//can not access it directly if the property is set to protected or private in Bird class
$penguin->legCount;
 ?>