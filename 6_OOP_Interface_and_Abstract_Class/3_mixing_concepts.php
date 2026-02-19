<?php

// In must cases you can use both of interface and Abstract classes
// Just to reach the best solution of project, example that I can demonstrate is:

interface ProductCRUD {
    public function createProduct(array $a, array $b, string $c);
    public function readProduct(string $id);
    public function updateProduct(array $a, array $b, string $c);
    public function deleteProduct(string $id);
}

abstract class AbstractProducts implements ProductCRUD {
    protected string $id;
    protected array $info = [
        "id" => [
            "name",
            "new",
            "active",
        ]
    ];
    protected array $sku = [
        "id" => [
            "variations",
            "prices"
        ]
    ];

    public function createProduct(array $a, array $b, string $c): void {
        $this->id = $c;
        $this->info = array_merge($this->info['id'], $a);
        $this->sku = array_merge($this->sku['id'], $b);
    }
    public function readProduct(string $id): void {
        foreach ($this->info[$id] as $k => $a) {
            echo "[Key: ". $k . ". Value of Product: ". $a . "]<br>";
        }
        foreach ($this->sku[$id] as $a) {
            echo "<br><br>";
            var_dump($a);
        }
    }
    public function updateProduct(array $a, array $b, string $c): void {
        $this->id = $c;
        $this->info = array_merge($this->info['id'], $a);
        $this->sku = array_merge($this->sku['id'], $b);
    }
    public function deleteProduct(string $id): void {
        unset($this->info);
        unset($this->sku);
    }
}

class Products extends AbstractProducts {
    // Thinking in something
}

$products = new Products();

$products->createProduct(
    [
        "id" => [
            "name" => "Product 1",
            "new" => true,
            "active" => true,
        ]
    ],
    [
        "id" => [
            "variations" => [
                ["value" => "Red"],
                ["value" => "Green"],
                ["value" => "Blue"]
            ],
            "prices" => [
                ["value" => 1.99],
                ["value" => 1.99],
                ["value" => 1.99]
            ]
        ]
    ],"id");

$products->readProduct("id");
echo "<br><br> Updated Product:<br>";
$products->updateProduct(
    [
        "id" => [
            "name" => "Product 2",
            "new" => false,
            "active" => false,
        ]
    ],
        [
            "id" => [
                "variations" => [
                    ["value" => "Yellow"],
                    ["value" => "Brown"],
                    ["value" => "Purple"]
                ],
                "prices" => [
                    ["value" => 19.99],
                    ["value" => 19.99],
                    ["value" => 19.99]
                ]
            ]
        ],"id");

$products->readProduct("id");

echo "<br><br><br>";
$products->deleteProduct("id");

var_dump($products);