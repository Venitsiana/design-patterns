<?php
namespace Factory;

class CoffeeFactory {

    public static function createCoffee($type)
    {

        if($type == 'cappuccino') {
            return new Cappuccino();
        } elseif($type == 'late') {
            return new LateCoffee();
        } else {
            throw new \InvalidArgumentException ('Coffee type = '. $type .' not valid!');
        }

    }

}