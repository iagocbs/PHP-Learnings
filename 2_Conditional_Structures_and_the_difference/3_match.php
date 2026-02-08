<?php 

// Match Structure is equal a switch / case, to go in different blocks
// In Match case, we can search different informational blocks
// Just like: 

$food = "cake";

$recipe = match($food) {
    "bread" => "Flour, Eggs [...]",
    "cake" => "Eggs, Milk, Flour [...]",
    default => "No recipe"
};

echo "items to use: ";
echo $recipe;
echo "<br>";

// -----------------------------------------------------------

// But we can use with expressions and more than one value 'case':

// With Expression, the code is more like:

$age = 19;

$value = match($age) {
    $age < 18 => "Teenage",
    $age >= 18 => "Adult",
    $age > 50 => "Elder"
};

var_dump($value);
echo "<br>";

// With more values, is more like:

$i = 3;

$return = match ($i) {
    0, 1 => "First Values",
    2, 3 => "Second Values",
    default => "Another values"
};