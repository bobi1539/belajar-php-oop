<?php 

require_once "data/Person.php";

$person = new Person("Ucup", "Jakarta");

$person->name = "Ucup";
$person->country = "Indonesia";

echo "Name : {$person->name}". PHP_EOL;
echo "Address : {$person->address}". PHP_EOL;
echo "Country : {$person->country}". PHP_EOL;
