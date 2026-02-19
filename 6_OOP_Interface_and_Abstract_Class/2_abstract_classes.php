<?php

// Abstract are very similar to Interfaces, but we gonna use EXTENDS to
// Have access to all information on abstract class

abstract class AbstractProduct {
    protected array $info = [
        "name",
        "new",
        "price",
        "active",
    ];

    public function __construct(array $info) {
        $this->info = $info;
    }

    // With abstract classes, we can declare abstract methods and attributes
    // That need competition in another class, like:
    abstract protected function getAllInfo();

    public function deleteInfo(): void {
        unset($this->info);
    }

}

// Now we "extends" the abstract clas on another class, to use
// All info and complete the incomplete methods, like

class SimpleProduct extends AbstractProduct {
    public function getAllInfo(): void {
        foreach ($this->info as $key => $info) {
            echo "The Key: " . $key . " have this value: " . $info. "<br><br>";
        }
    }
    public function inactivateProduct(): void {
        foreach ($this->info as $key => $info) {
            if($key == "active") {
                $this->info[$key] = 0;
            }
        }
    }
}

$product = new SimpleProduct(info: [
    "name" => "Product 1",
    "new" => true,
    "price" => 1.99,
    "active" => true
    ]
);

$product->getAllInfo();
echo "<br>";

$product->inactivateProduct();
$product->getAllInfo();
echo "<br>";

$product->deleteInfo();
var_dump($product);

// If you are confused of use and difference about: Interfaces and Abstract Classes
// We can use a real life example to help you difference.

// On Interfaces is more like a contract: "I have agreed to all methods and I gonna use"
// But Abstract Classes it is: "This is a model with generalist attributes and methods, that can you extend"