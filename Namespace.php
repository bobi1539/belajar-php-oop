<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;

$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

echo Helper\APPLICATION . PHP_EOL;

Helper\helpMe();
