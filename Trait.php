<?php 

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->hello("Ucup");
$person->goodBye("Otong");

$person->name = "Dono";
$person->run();

// var_dump($person);