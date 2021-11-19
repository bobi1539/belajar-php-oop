<?php 

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "001";
$student1->name = "Bobi";
$student1->value = 100;

$student1("ucup", "arguments", 100);