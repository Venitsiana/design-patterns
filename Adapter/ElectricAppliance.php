<?php
namespace Adapter;

class ElectricAppliance
{

    private $standardPowerOutlet;

    public function __construct(StandardPowerOutlet $standardPowerOutlet)
    {
       $this->standardPowerOutlet = $standardPowerOutlet;
    }

    public function powerUp()
    {
        $this->standardPowerOutlet->standardConnect();
    }

}