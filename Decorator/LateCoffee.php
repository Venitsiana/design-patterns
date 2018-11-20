<?php
namespace Decorator;

class LateCoffee extends Coffee {

    public function getPrice()
    {
        return 1.5;
    }

}