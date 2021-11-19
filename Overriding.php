<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Tono";
$manager->sayHello("Otong");

$vp = new VicePresident();
$vp->name = "budi";
$vp->sayHello("Ucup");
