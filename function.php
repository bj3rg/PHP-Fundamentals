<?php

//Creating a FUNCTION

//Function even number checker
function isEven($number): void
{
    if ($number % 2 == 0) { // checks if number has remainder
        echo "Even <br>";
    } else {
        echo "Odd <br>";
    }
}
isEven(2);

//Declare the data type of argument
function greet(string $name): void
{
    echo "Hi {$name}";
}

//Includes the key 'name' and value 'Angelo'
greet(name: "Angelo");

//Function that checks the list of item if odd or even
function isEvenArray(array $number): void //Accept array as argument
{
    //Checks each item on array
    foreach ($number as $num) {
        if ($num % 2 == 0) { //Checks if num is divisible by 0
            echo "{$num} is Even <br>";
        } else {
            echo "{$num} is Odd <br>";
        }
    }
}
$numbers = [1, 2, 3, 4, 5, 6]; // Array declaration
isEvenArray($numbers); // Calling the function
