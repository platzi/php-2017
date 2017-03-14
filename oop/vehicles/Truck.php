<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase {
    private $type;

    public function __construct($ownerName, $type)
    {
        $this->type = $type;
        $this->owner = $ownerName;
    }

    public function move() {
        echo 'Truck ' . $this->type . ': moving<br>';
    }
}