<?php
use Decorator\Cappuccino;
use Decorator\DecoratedCoffee;

function __autoload($class_name) {
    require_once $class_name . '.php';
}

$cappuccino = new Cappuccino();
//$lateCoffee = new \Decorator\LateCoffee();
$decoratedCoffee = new DecoratedCoffee($cappuccino);
$price = $decoratedCoffee->getPrice();

echo "You should pay $$price!";

