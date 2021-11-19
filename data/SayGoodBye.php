<?php

namespace Data\Traits;

trait SayGoodBye
{

    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye " . PHP_EOL;
        } else {
            echo "Good Bye : $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello Guys" . PHP_EOL;
        } else {
            echo "Hello : $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye in person" . PHP_EOL;
        } else {
            echo "Good Bye in person: $name" . PHP_EOL;
        }
    }

    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello Guys in person" . PHP_EOL;
        } else {
            echo "Hello in person: $name" . PHP_EOL;
        }
    }
}

trait All
{
    use SayGoodBye, SayHello, HasName, CanRun {
        // override mengganti level public atau private
        // {
        //     hello as private;
        //     goodBye as private;
        // }
    }
}
class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Running : {$this->name}" . PHP_EOL;
    }
}
