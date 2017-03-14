<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

use Vehicles\{Car, Truck};

echo 'Class Car<br>';
$car = new Car('Alex');
$car->move();
echo 'Owner car: ' . $car->getOwner() . '<br>';

echo '<br>Class truck<br>';
$truck = new Truck('Max', 'Pickup');
$truck->move();
echo 'Owner truck: ' . $truck->getOwner();
