<?php
namespace TemplateMethod;

abstract class HotDrinkTemplate {

    public function makeHotDrink()
    {
        $this->boilWater();
        $this->addMainIngredient();
        $this->addExtras();
    }

    public function boilWater() {
        echo 'Start: <br/> Boil water! ' . '</br>';
    }

    abstract function addMainIngredient();
    abstract function addExtras();

}