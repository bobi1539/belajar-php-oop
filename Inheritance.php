<?php 

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Tono";
$manager->sayHello("Andi");

$vp = new VicePresident();
$vp->name = "Ucup";
$vp->sayHello("Otong");