<?php 

// Here we have a simple Php File, the we gonna receive the input values!
// To get the values we gonna use "$_POST['value']" and the value is in
// HTML tag with attribute name="value", so lets check it out:

$name = $_POST['name'] ?? NULL;
$age = $_POST['age'] ?? NULL;
$email = $_POST['email'] ?? NULL;
$password = $POST['password'] ?? "*******";

// Above we declared we receive values, but if we don't receive it
// Return the variable if NULL, to get none information
// But for example, for email we don't accept everything, so we filter
// Just like:

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email = "Invalid email";
}

// This is just example, if the value of any variable is incorrect
// Changes to "Invalid Email", but the correct way to use, is with
// "Try Catch" Exceptions that we gonna see on future

