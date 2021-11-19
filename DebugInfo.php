<?php 

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "001";
$student1->name = "Bobi";
$student1->value = 100;
$student1->setSample("sample student1");

var_dump($student1);