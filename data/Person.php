<?php

class Person
{
    const AUTHOR = "Zero Programmer";

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hy my name is $this->name" . PHP_EOL;
        } else {
            echo "Hy $name, My name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Hello Author : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }
}
