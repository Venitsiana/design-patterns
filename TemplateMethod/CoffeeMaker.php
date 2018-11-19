<?php

namespace TemplateMethod;

class CoffeeMaker extends HotDrinkTemplate {

    function addMainIngredient()
    {
        echo 'Add coffee!' . '</br>';
    }

    function addExtras()
    {
        echo 'Add sugar and cream!' . '</br>';
    }

}