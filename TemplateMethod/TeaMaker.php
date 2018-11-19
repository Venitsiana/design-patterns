<?php
namespace TemplateMethod;

class TeaMaker extends HotDrinkTemplate
{

    function addMainIngredient()
    {
        echo 'Add tea!' . '</br>';
    }

    function addExtras()
    {
        echo 'Add honey!' . '</br>';
    }

}