<?php

require_once "data/Person.php";

$eko = new Person("Eko", null);
$eko->name = "Eko";
$eko->sayHello(null);

$ucup = new Person("Ucup", "Bkt");
$ucup->name = "Ucup";
$ucup->sayHello("Tono");

$eko->info();
$ucup->info();
