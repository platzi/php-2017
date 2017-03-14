<?php

class Car
{
    private $owner;

    public function __construct($ownerName)
    {
        $this->owner = $ownerName;
        echo 'construct<br>';
    }

    public function __destruct()
    {
        echo 'destruct<br>';
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

echo 'Class Car<br>';

$car = new Car('Max');
$car2 = new Car('Max');

$car->move();

echo 'Owner car: ' . $car->getOwner() . '<br>';
echo 'Owner car2: ' . $car2->getOwner();
