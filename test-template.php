<?php

use TemplateMethod\CoffeeMaker;
use TemplateMethod\TeaMaker;

function __autoload($class_name) {
    require_once $class_name . '.php';
}

$teaMaker = new TeaMaker();
$teaMaker->makeHotDrink();

$coffeeMaker = new CoffeeMaker();
$coffeeMaker->makeHotDrink();