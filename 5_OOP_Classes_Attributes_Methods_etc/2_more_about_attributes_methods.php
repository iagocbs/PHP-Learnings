<?php

// This section I separate to explain more about the Attributes and Methods,
// So lets check out about this class:

class Car {

    // Here we declare the "variables" with something called "visibility"
    // The visibility can have 3 types: Public, Protected and Private;

    // The difference is in how we access this attributes:
    // Public: Accessed by all code, everything can adjust the value
    // Protected: Accessed by Classes and Extended Classes, and only they can adjust the value
    // Protected: Accessed by Classes declared, and only this Class can adjust the value

    // With additional cases, we can declare readonly to don't have a modifiable value,
    // More like a constant, but you define value one time and don't adjust it anymore

    public string $model;
    public string $color;
    public int $year;
    public string $licensePlate;

    // The Methods have the same visibility criteria, but in this case I'm using the
    // Magic method "constructor":

    public function __construct(string $model, string $color, int $year, string $licensePlate) {
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
        $this->licensePlate = $licensePlate;
    }
}

// And finally we declared instance to test our class, with object type:

$fiat = new Car("Fiat Uno", "Red", 2013, "ABC1D23");

var_dump($fiat);
echo "<br>";

// With all attributes public, we can modifier everyone with:
$fiat->model = "New Car Model";
$fiat->color = "Blue";
$fiat->year = 2023;
$fiat->licensePlate = "EFG4H56";

var_dump($fiat);
echo "<br>";

// --------------------------------

// To test all visibility that you talk earlier, let see this class:

class User {
    protected string $name;
    protected readonly string $email;
    protected readonly int $age;

    public function __construct(string $name, string $email, int $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }
}

$user = new User(name:"Iago", email: "test@test.com", age: 20);

var_dump($user);
echo "<br>";

// If we try to use $user->name to change values, we can't access and get the fatal error
// To access this values we can use the getters and setters methods to adjust the values
// Or use a Magic Method, on this example we gonna use a getters and setters:

$user->setName("New Name");
echo $user->getName();

