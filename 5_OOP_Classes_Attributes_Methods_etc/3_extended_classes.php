<?php

// This code is more about Classes and Extended Classes,
// Literally Inheritance of Objects, let me show to you

// First we declare the class as we gonna use like "model", just like:

class Product {
    protected string $name;
    protected array $sku = [
      "id",
      "price",
    ];

    public function __construct(string $name, array $sku) {
        $this->name = $name;
        $this->sku = $sku;
    }

    protected function getName(): string {
        return $this->name;
    }
}

// And then I extend the Class Product, to SimpleSKU that
// Gonna use everything of Product, but with more specific methods:

class SimpleSKU extends Product {

    public function getSKU(): array {
        return $this->sku;
    }
    public function setSKU(array $sku): void {
        $this->sku = $sku;
    }
}

$simpleSKU = new SimpleSKU(name: "Simple", sku: ["id" => 01, "price" => 19.99]);

var_dump($simpleSKU);
echo "<br>";

$simpleSKU->setSKU(sku: ["id" => 10, "price" => 9.99]);
var_dump($simpleSKU->getSKU());