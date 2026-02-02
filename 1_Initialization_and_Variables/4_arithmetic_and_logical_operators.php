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
    // When their equal with different types or not, the conditional actives

    return 0;
}

if($sum === $sub) { 
    // The operator " === " indicates equal in every term
    // When their equal value and type, the conditional actives

    return 0;
}


if($sum >= $sub) { 
    // The operator " >= " indicates greater than or equal
    // When the variable greater than or equal another, the conditional actives

    return 0;
}

if($sum > $sub) { 
    // The operator " > " indicates greater than
    // When the variable greater than another, the conditional actives

    return 0;
}

if($sum <= $sub) { 
    // The operator " <= " indicates less than or equal
    // When the variable less than or equal another, the conditional actives

    return 0;
}

if($sum < $sub) { 
    // The operator " < " indicates less than
    // When the variable less than another, the conditional actives

    return 0;
}

if($sum != $sub) { 
    // The operator " != " indicates NOT logical
    // When the variable is different than another, the conditional actives

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