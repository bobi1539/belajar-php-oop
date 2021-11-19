<?php 

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Ucup");
var_dump($company);

$company->programmer = new BackendProgrammer("Ucup");
var_dump($company);

$company->programmer = new FrontendProgrammer("Ucup");
var_dump($company);

$company->sayHelloProgrammer(new Programmer("Ucup"));
$company->sayHelloProgrammer(new BackendProgrammer("Ucup"));
$company->sayHelloProgrammer(new FrontendProgrammer("Ucup"));