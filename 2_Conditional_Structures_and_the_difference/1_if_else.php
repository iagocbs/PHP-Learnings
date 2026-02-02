<?php 

// In this topic, we gonna talk about Conditional Structures!!!
// On the first file, let's see: If / Else / Else If
// Check below!

$value = 0;

if($value <= 10) {
    echo "True";
} else {
    echo "False";
}

echo "<br>";

// The code above, basicly says:
// If Variable more than or equal 10, than True. Else "False"
// A simple but funcional code.

// -----------------------------------------------------------

// But then we have a new contestant, the: elseif / else if
// Basicly a new "if" on structure, for example:

if($value > 10) {
    echo "The {$value} is above 10!";
} elseif($value < 10) {
    echo "The {$value} is below 10 :/";
} else {
    echo "The {$value} is 10 :)";
}

echo "<br>";

// -----------------------------------------------------------

// On real exemples, is very rare use: elseif or else in most cases
// In a function for example, we can use like this:

$i = 17;

function ageValidator($age) {
    if($age > 17) {
        echo "You can pass";
        return $age;
    }
    echo "You can't pass";
    return;

    // This function validate if age is above 18 years old
    // If it's than you can go, but if is not you don't pass
    // Is a equal way that "else" works

}

ageValidator($i); // <- running function

?>