<?php 

// The Conditional => Switch, basically 'switch' into "case' blocks
// This can be used, to read / write specific codes and different occasions
// With the 'case' block, if we don't use the 'break' or 'continue' structure
// They gonna pass by all cases blocks

// Example:

$cases = 0;

switch($cases) {
    case 0:
        echo "False";
        echo "<br>";
    case 1:
        echo "True";
        echo "<br>";
    default:
        echo "It isn't a 0 or 1 values :)";
        echo "<br>";
}

echo "<br>";

// -----------------------------------------------------------

// But if we use, a 'break' structure, the cases are be gonna passed only one time
// Example:

$int = 1;

switch($int) {
    case 0:
        echo "False";
        echo "<br>";
        break;
    case 1:
        echo "True";
        echo "<br>";
        break;
    default:
        echo "It isn't a 0 or 1 values :)";
        echo "<br>"; 
        break;
}

echo "<br>";

// With 'continue' we have a interesting situation, if we are in
// Loop Structure, with 'continue 2' we can pass only the Switch 
// Let me show you:

for($i = 0; $i < 3; $i++) {
        switch($i) {
            case 0:
                echo "False";
                echo "<br>";
                continue 2;
            case 1:
                echo "True";
                echo "<br>";
                continue 2;
            default:
                echo "It isn't a 0 or 1 values :)";
                echo "<br>"; 
                continue 2;
        }
}

echo "<br>";

// Just like the 'break'

// -----------------------------------------------------------

// Of course, we can you String Types on Switch too, and some expressions
// Just like:

$string = "legal";

switch($string) {
    case "chato":
        echo "False";
        echo "<br>";
        break;
    case "legal":
        echo "True";
        echo "<br>";
        break;
    default:
        echo "Another value";
        echo "<br>"; 
        break;
}

echo "<br>";

// For multiple value, we can use:

$str1 = "abc";
$str2 = "def";

switch([$str1, $str2]) {
    case ["abc", "fed"]:
        echo "False";
        echo "<br>";
        break;
    case [$str1, "def"]:
        echo "True";
        echo "<br>";
        break;
    default:
        echo "Another value";
        echo "<br>"; 
        break;
}

echo "<br>";

// And with expression its just like:

$value = 2;
$exp1 = 4;

switch($value) { // search the case, if is equal the value
    case $exp1 - 2:
        echo "False";
        echo "<br>";
        break;
    case $exp1 - 1:
        echo "True";
        echo "<br>";
        break;
    default:
        echo "Another value";
        echo "<br>"; 
        break;
}

echo "<br>";