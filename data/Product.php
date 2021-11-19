<?php

class Product
{
    protected string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class ProductDummy extends Product
{
    public function info(): void
    {
        echo "Product Dummy : $this->name" . PHP_EOL;
    }
}
