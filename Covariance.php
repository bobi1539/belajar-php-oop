<?php

require_once "data/Animal.php";
require_once "data/Food.php";
require_once "data/AnimalShelter.php";

use Data\{Animal, AnimalFood, Cat, Dog, AnimalShelter, CatShelter, DogShelter, Food};

$catShleter = new CatShelter();
$cat = $catShleter->adopt("Luna");
$cat->eat(new AnimalFood());

$dogShleter = new DogShelter();
$dog = $dogShleter->adopt("Puppy");
$dog->eat(new Food());
