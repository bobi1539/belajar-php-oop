<?php 

$array = [
    "firstName" => "Ucup",
    "middleName" => "Surucup",
    "lastName" => "Siregar"
];

$object = (object) $array;

var_dump($object);

echo "first name : $object->firstName" . PHP_EOL;
echo "middle name : $object->middleName" . PHP_EOL;
echo "last name : $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;

var_dump($arrayLagi);

require_once "data/Person.php";

$person =new Person("Ucup", "Jakarta");

$arrayPerson = (array) $person;
var_dump($arrayPerson);