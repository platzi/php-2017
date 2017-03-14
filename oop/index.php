<?php

class Vehicle
{
    protected $owner;

    public function __construct($ownerName)
    {
        $this->owner = $ownerName;
        echo 'construct<br>';
    }

    public function move() {
        echo 'moving<br>';
    }

    public function getOwner() {
        return $this->owner;
    }

    public function setOwner($owner) {
        $this->owner = $owner;
    }
}

class Car extends Vehicle {
    public function move() {
        echo 'Car: moving<br>';
    }
}

class Truck extends Vehicle {
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

echo 'Class Car<br>';
$car = new Car('Alex');
$car->move();
echo 'Owner car: ' . $car->getOwner() . '<br>';

echo '<br>Class truck<br>';
$truck = new Truck('Max', 'Pickup');
$truck->move();
echo 'Owner truck: ' . $truck->getOwner();
