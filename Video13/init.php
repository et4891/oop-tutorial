<?php 

spl_autoload_register(function($class) {

	// require_once 'classes/' . $class . '.php';  //alternative way
	require_once "classes/{$class}.php";
});