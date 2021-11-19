<?php 

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Ucup Surucup";

echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(1, 2, 3, 4, 5);
echo "Result : $result" . PHP_EOL;

$array = [1, 2, 3, 4, 5];
$key = 2;
$result = MathHelper::binarySearch($array, $key);
echo "Result : " . ($result ? " Found" : " Not Found") . PHP_EOL;
