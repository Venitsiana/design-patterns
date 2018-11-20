<?php
namespace Decorator;

class DecoratedCoffee extends Coffee {

    private $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    function getPrice()
    {
        return $this->coffee->getPrice() + 0.20;
    }

}