<?php
namespace Strategy;

class StandardPowerOutlet implements PowerOutlet {

    public function connect()
    {
        echo 'I am standard power outlet!';
    }

}