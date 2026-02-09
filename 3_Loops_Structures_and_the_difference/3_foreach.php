<?php 

// A ForEach Loops is similar to For Loops, but for Array and Objetos Traversable
// For a simple example, let see here:

echo "ForEach basic:";
echo "<br>";

$array = ['red','green','blue','black','white'];

foreach($array as $value) {
    echo $value;
    echo "<br>";
}

echo "<br>";

// In this simple example, we can see about the Loop
// With: command($variable as $value) {} where, the value
// Can be used in different ways. And we have the one more
// Version of Loop, and is: command($variable as $key => $value) {}
// The new version, can we have get the key to manipulate

// Like this:

echo "ForEach with Keys:";
echo "<br>";

$example = [1, 2, 3, 4, 5];

foreach($example as $key => $number) {
    $number *= 2;
    echo "Key: {$key} -> Value: {$number} <br>";
}

echo "<br>";

// -----------------------------------------------------------

// Important to mention, but ForEach don't loops with new values
// Just like this simple example:

echo "ForEach adding Value: 4 on Loop:";
echo "<br>";

$a = [1, 2, 3];
foreach ($a as $k => $v) {
    echo $v;
    echo ", ";

    if ($v === 2) {
        $a[] = 4; // Adding new value
    }
}

echo "<br>";

// On the example above, the gonna Loops until 3 and not 4

// We have the same ideia when you unset the array?

echo "ForEach Unsetting Value: 3 on Loop:";
echo "<br>";

$b = [1, 2, 3];
foreach ($b as $k => $v) {
    echo $v;
    echo ", ";

    if ($v === 2) {
        unset($a[2]); // Unsetting the last value
    }
}

echo "<br><br>";

// -----------------------------------------------------------

// But now, here things get interesting, like 2 examples above
// We can make this happend, with the iterate the reference, like: 
// foreach ($arr as &$v), they turned in a reference that you can
// Change in Loop: 

echo "ForEach Iterated Adding Value: 4 on Loop:";
echo "<br>";

$a = [1, 2, 3];
foreach ($a as &$v) {
    echo $v;
    echo ", ";

    if ($v === 2) {
        $a[] = 4;
    }
}

echo "<br>";

echo "ForEach Iterated Unsetting Value: 3 on Loop:";
echo "<br>";

$b = [1, 2, 3];
foreach ($b as $k => &$v) {
    echo $v;
    echo ", ";

    if ($v === 2) {
        unset($b[2]); // Unsetting the last value
    }
}

echo "<br>";

// Thanks to sunfundev at https://www.php.net/manual/pt_BR/control-structures.foreach.php