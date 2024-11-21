<?php
$username = "Angelo Burog";
$fullname = array("Angelo", "Kalaw", "Burog");
$phone = "123-456";

$username = strtolower($username); //Lowercase the text

$username = strtoupper($username); //Uppercase the text

$username = trim($username); //Removes white spaces

$username = str_pad($username, 20, "0"); //Adds the 3rd value until the length number is succeeded

$username = str_replace("-", "", $phone); //Replace the dash with blank

$username = strrev($username); //Reverse the text

$username = str_shuffle($username); // Shuffles the string

$username = strcmp($username, "Angelo Burog"); // Compare string, return 0 if true, -1 if false

$username = strlen($username); // Length of string

$index = strpos($phone, "-"); // Returns the index of checked character (dash)'-'

$firstname = substr($username, 0, 3); // Cut the string from first position '0' upto last position '3'

$fn = explode(" ", $username); //Removes the first argument (" ")

foreach ($fn as $item) { //Display the items of the exploded variable
    echo "$item";
}

$fn = implode(" ", $fullname); // First argument separates the imploded/concatenated items

echo $fn;
