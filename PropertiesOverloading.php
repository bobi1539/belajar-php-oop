<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        // echo "Access property $name" . PHP_EOL;
        // return "CONTOH";
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        // echo "Set property $name with value : $value" . PHP_EOL;
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        // echo "Isset $name" . PHP_EOL;
        // return false;
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        // echo "Unset $name" . PHP_EOL;
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with argument $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        // $join = join(",", $arguments);
        // echo "Call function static $name with argument $join" . PHP_EOL;

        foreach($arguments as $argument) {
            echo "Argument : $argument" . PHP_EOL;
        }
    }
}

$zero = new Zero();
$zero->firstName = "Budi";
$zero->middleName = "Santoso";
$zero->lastName = "Siregar";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Middle Name : $zero->middleName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;

if (isset($zero->firstName)) {
    echo "First Name is exist" . PHP_EOL;
}

$zero->sayHello("Ucup", "Surucup");
Zero::sayHello("Tono", "Saputra");

// isset($zero->firstName);
// unset($zero->firstName);
// $zero->firstName = "Budi";
// echo $zero->firstName . PHP_EOL;
