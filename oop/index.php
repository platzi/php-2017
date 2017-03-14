<?php

class Car
{
    private $owner;

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

$car = new Car();
$car2 = new Car();

$car->move();
$car->setOwner('Alex');
$car2->setOwner('Max');

echo 'Owner car: ' . $car->getOwner() . '<br>';
echo 'Owner car2: ' . $car2->getOwner();
