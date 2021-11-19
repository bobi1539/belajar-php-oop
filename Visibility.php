<?php

require_once "data/Product.php";

$product = new Product("Sabun", 10000);

echo $product->getName() . PHP_EOL;

$dummy = new ProductDummy("Laptop", 15000);

$dummy->info();

