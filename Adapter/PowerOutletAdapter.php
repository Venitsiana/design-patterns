<?php
namespace Adapter;

class PowerOutletAdapter extends StandardPowerOutlet {

    private $ukPowerOutlet;

    public function __construct(UKPowerOutlet $ukPowerOutlet)
    {
        $this->ukPowerOutlet = $ukPowerOutlet;
    }

    public function standardConnect()
    {
        $this->ukPowerOutlet->ukConnect();
    }

}