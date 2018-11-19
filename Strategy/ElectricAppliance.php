<?php
namespace Strategy;

class ElectricAppliance
{

    private $powerOutlet;

    /**
     * ElectricAppliance constructor.
     * @param PowerOutlet $powerOutlet
     */
    public function __construct(PowerOutlet $powerOutlet)
    {
       $this->powerOutlet = $powerOutlet;
    }

    public function powerUp()
    {
        $this->powerOutlet->connect();
    }

}