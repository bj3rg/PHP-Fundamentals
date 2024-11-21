
<?php
//Arithmetic Operators in PHP + - * % / **

$x = 10;
$y = 2;
$answer1 = null;
$answer2 = null;
$answer3 = null;
$answer4 = null;
$answer5 = null;
$answer6 = null;

$answer1 = $x *$y; // Multiply
$answer2 = $x -$y; // Subtract
$answer3 = $x +$y; // Add
$answer4 = $x /$y; // Divide
$answer5 = $x **$y; // Exponent
$answer6 = $x %$y; // Modulo -> returns remainder


echo "<br>$answer1";
echo "<br>$answer2";
echo "<br>$answer3";
echo "<br>$answer4";
echo "<br>$answer5";
echo "<br>$answer6";

//Increment Operators

$counter = 2;

$counter += 2; //Increment
// $counter -= 2; //Decrement
echo "<br> $counter";


//Operator precedence or mathematical set of rules for operation
 // () ** * / % + -   Parenthesis Exponent Multiplication Division Modulo Addition Subtraction

 $total = 1 + 2 - 3 *4 / 5 ** 6;
 echo "<br> Answer for total is: $total"
?>
