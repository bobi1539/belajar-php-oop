<?php

require_once "data/Car.php";

use Data\{Car, Avanza};

$car = new Avanza();
$car->drive();

echo "Tire : {$car->getTire()}" . PHP_EOL;
