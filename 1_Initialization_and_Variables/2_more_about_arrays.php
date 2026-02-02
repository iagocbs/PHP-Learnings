<?php

// In PHP we have 2 types of Arrays: 
// A Numeric Array and Associative Array 
// We gonna talk more about below:

// To start we have a Numeric Array 
// A simple explanation is the Array 
// Is gonna go on: 0 => X, 1 => Y, 2 => Z...
// Check this:

$numericArray = ["Name", 10, 3.14, false];

// This Exemple gonna return:
// 0 => "Name", 1 => 10, 2 => 3.14, 3 => false
// We can check with: var_dump

var_dump($numericArray); 
echo "<br>";

// -----------------------------------------------

// Now with Associative Arrays things are different.
// So unlike before, we gonna declare like a "key" to
// Have some value different of numeric, be like:
// 'string' => "Name", 'int' => 10, 'float' => 3.14 ...

$associativeArray = [
    'string' => "Name", 
    'Int' => 10, 
    'Float' => 3.14, 
    'Bool' => false
];

// This exemple the keys we declared will be returned, 
// Instead of the previously presented numeric values: 0, 1, 2..

var_dump($associativeArray); 
echo "<br>";

// -----------------------------------------------

// Of course, this isn't everything, if Associative Array
// We could make different types of usage, like:

$socialMediaPost = [
    'author' => [
        'name' => "Iago",
        'email' => "exemple@gmail.com"
    ],
    'comments' => [
        0 => [
            'name' => "Marcelo",
            'text' => "Delete this post now"
        ],
        1 => [
            'name' => 'Iago',
            'text' => "Why?"
        ]
    ]
];

// And with this we can access different information, that
// We need in different systems, like get first comment name:

var_dump($socialMediaPost['comments'][0]['name']); // Here we go as: 'comments' -> 0 -> 'name'
echo "<br>";

// -----------------------------------------------

// To finalize this topic, we have some commands that gonna help us:
// 

$numericArray[] = 'exemple'; // To Add a New Value at the end of Array


// count($value) = Count the quantity of values

echo count($numericArray);
echo "<br>";

// isset($value) = Check the variable is defined

if(isset($numericArray)) {
    echo "true";
    echo "<br>";
}

// unset($value[X]) = This Remove the Specific Value of Array 

unset($numericArray[4]); // In this case, we remove: exemple

?>