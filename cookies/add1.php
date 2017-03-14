<?php

$value = $_COOKIE['count'];
$value++;

setcookie('count', $value);

echo 'Adding 1';