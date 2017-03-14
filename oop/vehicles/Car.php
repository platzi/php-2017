<?php

namespace Vehicles;

require_once 'VehicleBase.php';
require_once 'GPSTrait.php';

class Car extends VehicleBase implements \Serializable {

    use GPSTrait;

    public function move() {
        echo $this->startEngine() . '<br>';
        echo 'Car: moving<br>';
    }

    public function startEngine()
    {
        return 'Car: start engine';
    }

    public function serialize()
    {
        echo 'Serialize<br>';
        return $this->owner;
    }

    public function unserialize($serialized)
    {
        echo 'Unserialize<br>';
        $this->owner = $serialized;
    }
}