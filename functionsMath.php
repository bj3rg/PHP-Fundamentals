<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="functionsMath.phps" method="post">
                <!-- <label> x => </label>
        <input type="text" name="x">
        <label> y => </label>
        <input type="text" name="y">
        <label> z => </label>
        <input type="text" name="z"> -->

                <label> Radius =></label>
                <input type="'text" name="radius">

                <input type="submit" value="calculate">
                <br>

        </form>
</body>

</html>

<?php

// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;

$radius = $_POST["radius"];

$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$area = pi() * pow($radius, 2);
$volume = 4 / 3 * pi() * pow($radius, 3);


$circumference = round($circumference, 2);
$area = round($area, 2);
$volume = round($volume, 2);

echo "Circumference = {$circumference} cm <br>";
echo "Area = {$area} cm^2<br>";
echo "Volume = {$volume} cm^3";

// LIST OF MATH FUNCTIONS
// $total = abs($x); //Return absolute value; converts into positive
// $total = round($x); //Return rounded off value
// $total = floor($x); //Return the whole number; disregards the value of decimal; round down
// $total = ceil($x); //Returns a rounded up; always round up
// $total = pow($x, $y); //Exponent/Power function
// $total = sqrt($x);//Returns square root of given number
// $total = max($x, $y, $z); //Returns the maximum or largest number given
// $total = min($x, $y, $z); //Returns the minimum or smallest number given
// $total = pi(); //Returns the pi value
// $total = rand(0,2); //Returns random number with or without args

// echo $total;

?>