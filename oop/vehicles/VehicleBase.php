<?php

namespace Vehicles;

abstract class VehicleBase
{
    protected $owner;

    public function __construct($ownerName)
    {
        $this->owner = $ownerName;
        echo 'construct<br>';
    }

    public function move() {
        echo $this->startEngine() . '<br>';
        echo 'moving<br>';
    }

    public function getOwner() {
        return $this->owner;
    }

    public function setOwner($owner) {
        $this->owner = $owner;
    }

    public abstract function startEngine();
}