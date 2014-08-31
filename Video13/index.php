<?php 

// too much classes, create init.php
// use sspl_autoload_register to autoload whatever class is needed
require_once 'init.php';

$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(20, 30);		// 50

$c->setOperation(new Divider);
$c->calculate(2);					// 25

$c->setOperation(new Subtractor);
$c->calculate(5);					// 20

$c->setOperation(new Multiplier);
$c->calculate(5);					// 100

echo $c->getResult();