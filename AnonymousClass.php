<?php

interface HelloWorld
{
    public function sayHello(): void;
}

$sayHello = new class("Ucup") implements HelloWorld
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello(): void
    {
        echo "Hello World $this->name" . PHP_EOL;
    }
};

$sayHello->sayHello();
