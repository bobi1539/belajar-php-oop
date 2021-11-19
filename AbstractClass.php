<?php

require_once "data/Location.php";

use Data\{Location, City, Country};

// $location = new Location();// Error

$city = new City();
$city->name = "Jakarta";

echo $city->name . PHP_EOL;
