<?php

$v1 = 1;
$v2 = 3;

$v3 = 2;
$v4 = 3;

$result1 = $v1 == $v2;
echo 'Result 1: <br>';
var_dump($result1);
echo '<br>';
$result2 = $v3 == $v4;
echo 'Result 2: <br>';
var_dump($result2);

$result3 = $result1 || $result2;
echo '<br>';
echo '<br>';
echo 'Result Final: <br>';
var_dump($result3);

