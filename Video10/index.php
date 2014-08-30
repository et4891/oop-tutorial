<?php 

require 'Foo.php';

//when using static we don't need to create new objects then call out the function
//we can just echo it directly
echo Foo::hello();
echo '<br>';
echo Foo::$foo;