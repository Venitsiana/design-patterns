<?php
use Factory\CoffeeFactory;

function __autoload($class_name) {
    require_once $class_name . '.php';
}

$drinkType = 'late';

$drink = CoffeeFactory::createCoffee($drinkType);

echo 'The instance of type ' . get_class($drink) . ' is created!';