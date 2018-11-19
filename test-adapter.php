<?php
use Adapter\UKPowerOutlet;
use Adapter\PowerOutletAdapter;
use Adapter\ElectricAppliance;

function __autoload($class_name) {
    require_once $class_name . '.php';
}

$ukPowerOutlet = new UKPowerOutlet();
$powerOutletAdapter = new PowerOutletAdapter($ukPowerOutlet);
$electricAppliance = new ElectricAppliance($powerOutletAdapter);
$electricAppliance->powerUp();
