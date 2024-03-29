<?php

namespace Data;

interface HasBrand
{
    public function getBrand(): string;
}

interface isMaintenance
{
    public function isMaintenance(): bool;
}

interface Car extends HasBrand
{
    public function drive(): void;

    public function getTire(): int;
}

class Avanza implements Car, isMaintenance
{

    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}
