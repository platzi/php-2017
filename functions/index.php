<?php

//function hello($name) {
//    echo 'Hello ' . $name;
//    echo '<br>';
//}
//
//hello('Mary');
//hello('Elizabeth');

$x = 100;

function sum($a, $b) {
    $x = $a + $b;
    return $x;
}

$c = sum(5, 6);
var_dump($c);
var_dump($x);