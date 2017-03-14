<?php

$x = 3;
$numbers = [1, 2, 3, 4, 5];
$closure = function ($n) use ($x) {
    return $n * $x;
};

$x = 4;
$result = array_map($closure, $numbers);

var_dump($result);
