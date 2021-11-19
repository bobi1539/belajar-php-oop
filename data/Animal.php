<?php

namespace Data;

require_once 'Food.php';

abstract class Animal
{
    public string $name;

    abstract public function run();

    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    public function run()
    {
        echo "$this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood) :void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run()
    {
        echo "$this->name is running" . PHP_EOL;
    }

    public function eat(Food $food) :void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}
