<?php
use Strategy\UKPowerOutlet;
use Strategy\ElectricAppliance;

function __autoload($class_name) {
    require_once $class_name . '.php';
}

$ukPowerOutlet = new UKPowerOutlet();
//$standardPowerOutlet = new \Strategy\StandardPowerOutlet();
$electricAppliance = new ElectricAppliance($ukPowerOutlet);
$electricAppliance->powerUp();