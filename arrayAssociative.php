<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="arrayAssociative.php" method="post">
                <label>Country Name: </label>
                <input type="text" name="country">
                <input type="submit">
        </form>
</body>

</html>


<?php

//Declaring an array of Capitals
$capital = array(
        "Philippines" => "Manila",
        "China" => "Beijing",
        "Thailand" => "Bangkok"
);

$countryName = $_POST["country"];
$capitalName = $capital[$_POST["country"]];
// Returns the capital of the country requested on forms
echo "<br> The country {$countryName} has capital of {$capitalName} <br>";


//Associative Array or Key-Value Pairs

//Returning the Key-Value Pair
echo "<br> <b> Displaying Key-Value pair </b> <br>";
foreach ($capital as $key => $value) {
        echo "{$key} = {$value} <br>";
}

//Returning the value of a given key
echo "<br> The capital of Philippines is {$capital["Philippines"]} ";

//Reassigning a value to a key
$capital["China"] = "Shanghai";
echo " <br> Reassigning China Capital => The new capital of China is <b> {$capital["China"]} </b> <br>";

//Adding a new key-value pair
$capital["USA"] = "Washington DC";

//Displaying Key and Value individually
// array_keys => create a new array of Keys
// array_values => create a new array of Values 
$key = array_keys($capital);
$value = array_values($capital);

foreach ($key as $val) {
        echo "<br> key => $val";
}

foreach ($value as $val) {
        echo "<br> value => $val";
}

//Flipping key-value to value-key 
//array_flip
echo "<br> <br>Flipping Key and Value";
$flippedCapitals = array_flip($capital);

foreach ($flippedCapitals as $key => $value) {
        echo "<br> key => {$key} : value => {$value}";
}


?>