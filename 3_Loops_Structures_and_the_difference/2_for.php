<?php

// Following the Loops Structures, we have a For Loop
// The For Loop, are interesting Loop because can we
// Declare a Variable, Expression and Increment on
// Single declariation

// Let me explain in this example:

for($i = 0; $i < 10; $i++) {
    echo "Value: {$i}! <br>";
}

echo "<br>";

// In this code, we have: for(Initialization / Variable; Expression; Increment)

// -----------------------------------------------------------

// The For is more usable on code the we know when is gonna end,
// Like $i = 0 with $i < 10, ends when $i = 10

// More funny examples:

$nbrList = [];

for($j = 0; $j < 10; $j++) {
    $nbrList[$j] = ($j + 1) * 2;
    echo "Numbers added to List: {$nbrList[$j]} <br>";
}

echo "<br>";

// ---------------------------

// Printing Triangles

for($k = 0; $k < 10; $k++) {
    for($l = 0; $l < $k; $l++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for($k = 10; $k > 0; $k--) {
        for($l = 0; $l < $k; $l++)
            echo "*";
        echo "<br>";
}