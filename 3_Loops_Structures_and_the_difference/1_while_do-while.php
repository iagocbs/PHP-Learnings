<?php 

// Now we gonna see about: Loops Struct, with the first one
// The While and Do-While Loops, they are similar so I'm gonna
// Talk about 2 Structs here, first with While

$d = 0;

while($d < 5) {
    echo "Number {$d} <br>";
    $d++;
}

echo "<br>";

// On the code above, while a is below 5, than the code runs
// Get the concept of Loop? If not, basicaly when the expression is True
// Then the code is running, and if the expression is False the code don't tun

// But here is the difference of While and Do-While
// While validate if expression is True, on begining of code
// But the Do-While, runs the code one time and then validate in the end

// -----------------------------------------------------------

// So, here we have the difference:

echo "While Loop:";
echo "<br>";

$i = 5;

while($i > 0) { // Validate in the begining
    echo "Countdown: {$i} <br>";
    $i--;
}
echo "<br>";

echo "Do-While Loop:";
echo "<br>";

do {
    echo "Countdown: {$d} <br>";
    $d--;
} while($d > 0); // Validate in the end