<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

use Vehicles\{Car, Truck};

echo 'Class Car<br>';
$car = new Car('Alex');
$car->move();

echo '<br>Class truck 1<br>';
$truck1 = new Truck('Max', 'Pickup');
$truck1->move();

echo '<br>Class truck 2<br>';
$truck2 = new Truck('Max', 'Pickup');
$truck2->move();

echo '<br>Total Trucks: ' . Truck::getTotal() . '<br>';
