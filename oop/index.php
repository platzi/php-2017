<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

use Vehicles\{Car, Truck, ToyCar};

try {
    echo 'Class ToyCar<br>';
    $toyCar = new ToyCar('Alex');
//    $toyCar->move();
} catch (Exception $e) {
    echo 'This is a toy<br><br>';
    // log...
} finally {
    echo 'finally<br><br>';
}

echo 'Class Car<br>';
$car = new Car('Alex');
$car->move();
echo 'GPS pos: ' . $car->getPos();

echo '<br>Class truck 1<br>';
$truck1 = new Truck('Max', 'Pickup');
$truck1->move();

echo '<br>Class truck 2<br>';
$truck2 = new Truck('Max', 'Pickup');
$truck2->move();

echo '<br>Total Trucks: ' . Truck::getTotal() . '<br>';

$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner: ' . $newCar->getOwner() . '<br>';
