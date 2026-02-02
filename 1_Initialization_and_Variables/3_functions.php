<?php

// In this file, we gonna talk and see abou Functions,
// The commum way to reuse some piece of code!

// Here we gonna see how to declare:

$name; // Variable in usage

function hello($name) {
    echo "Hello, " . $name . "!"; 
}

// Functions, are declared with function reserved word
// And with this, we could let a name of Function and
// Necessary Variables, like {$name}, check return:

$name = "Iago";
hello($name);
echo "<br>";

// -----------------------------------------------

// We can make different things with functions, 
// Like sum, validation etc. To make simple, let's
// Make a sum Function:

function add($n1,$n2) {
    return $n1 + $n2;
}

// To get this information, we can attribuite on
// A variable, to demonstrate to user:

$result = add(16,26);
var_dump($result);
echo "<br>";

// In future, we gonna see more about Aritmatic usage!

?>