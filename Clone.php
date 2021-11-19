<?php 

require_once 'data/Student.php';

$student1 = new Student();
$student1->id = '001';
$student1->name = 'Bobi';
$student1->value = 100;
$student1->setSample("sample student 1");

var_dump($student1);

$student2 = clone $student1;
$student2->setSample("sample student 2");
// manual
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value = $student1->value;
var_dump($student2);