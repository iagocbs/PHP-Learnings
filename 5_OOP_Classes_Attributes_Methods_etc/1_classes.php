<?php

// PHP have OOP that we gonna see right now!
// For this study, let me show you about Classes:

class Human {
    public string $name;
    public int $age;
    public float $height;
    public bool $alive;

    public function __construct(string $name, int $age, float $height, bool $alive) {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->alive = $alive;
    }
}

// Like above, we can see, that classes to group some attributes and methods
// If you're no familiar with attributes and methods, they are like Variables
// and Functions

// To get object with values, we incorporate it on variable, just like this:

$example = new Human(name: "Iago", age: 20, height: 1.75, alive: true);

var_dump($example);