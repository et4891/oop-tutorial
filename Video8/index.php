<?php 

require 'Collection.php';

$c = new Collection();
$c->add('foo');
$c->add('bar');

echo $c->jsonSerialize(); //prints ["foo","bar"]
echo '<br>';
echo json_encode($c);			//prints "[\"foo\",\"bar\"]"
echo '<br>';
echo count($c);						//prints 2
echo '<hr>';


$c->set('baz', 'qux');
echo $c->get('baz');			//use the key to get the value //prints qux

echo '<br>';
//uses the magic method __set()
$c->has = 'sah';					//add key 'has' and value 'sah' into the array
//uses the magic method __get()
echo $c->has;							//prints sah

echo '<pre>' . print_r($c->all(), true) . '</pre>';

echo $c->foo('apple', 'bar', 'cat', 'dog');	//prints foo has been called with arguments: apple, bar, cat, dog


//uses the magic method __toString()
//gets error if magic method __toString() is removed
echo '<br>';
echo $c;
 ?>