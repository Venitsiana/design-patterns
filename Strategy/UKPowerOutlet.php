<?php
namespace Strategy;

class UKPowerOutlet implements PowerOutlet {

    public function connect()
    {
        echo 'I am UK power outlet';
    }

}