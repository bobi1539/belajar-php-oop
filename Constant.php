<?php

require_once "data/Person.php";

define("APPLICATION", "Belajar php oop");
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

// cara akses constant
echo Person::AUTHOR . PHP_EOL;