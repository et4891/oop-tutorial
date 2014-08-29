<?php 

require 'Collection.php';

$c = new Collection();
$c->add('foo');
$c->add('bar');

echo $c->toJson();  //prints ["foo","bar"]
echo '<br>';
echo count($c);
 ?>