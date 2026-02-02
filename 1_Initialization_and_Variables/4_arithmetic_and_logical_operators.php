<?php

// To our final topic, we gonna talk about the arithmetic!
// Let's see more about arithmetic:

$sum = (1 + 1); // The Plus "+" indicates sum
$sub = (2 - 1); // The Minus "-" indicates subtration
$mul = (5 * 5); // The Multiplication is indicated by Asterisk "*"
$div = (4 / 2); // The Division is indicated by Slash "/"
$exp = (2 ** 2); // The Exponentional is indicated by Double Asterisk "**"
$mod = (2 % 1);  // The Module is indicated by Percentage Symbol "%"

// -------------------

// Now for Logial Operators, let's see in 
// Conditional Commands as Exemple:

if($sum == $sub) { 
    // The operator " == " indicates equal
    // When their equal, the conditional actives

    return 0;
}

if($sum != $sub) { 
    // The operator " != " indicates NOT logical
    // When their different, the conditional actives

    return 0;
}

if($sum && $sub == 0) { 
    // The operator " && " indicates AND logical
    // When the two declaration are True, the conditional actives

    return 0;
}

if($sum || $sub) { 
    // The operator " || " indicates OR logical
    // When the least one of there are True, the conditional actives

    return 0;
}

?>