<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- CHECKBOX each separate variable -->
    <!-- <form action="inputCheckbox.php" method="post">
        <input type="checkbox" name="Pizza" value="Pizza">Pizza <br>
        <input type="checkbox" name="Apple" value="Apple">Apple <br>
        <input type="checkbox" name="Drinks" value="Drinks">Drinks <br>
        <input type="submit" name="button" value="Enter">
    </form> -->

    <!-- CHECKBOX in Array form -->
    <form action="inputCheckbox.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza <br>
        <input type="checkbox" name="foods[]" value="Apple">Apple <br>
        <input type="checkbox" name="foods[]" value="Drinks">Drinks <br>
        <input type="submit" name="button" value="Enter">
    </form>
</body>

</html>

<?php


/*
if (isset($_POST["button"])) { // Checks if button is clicked or submitted
    // Checks if item is checked 
    if (isset($_POST["Pizza"])) {
        echo "You like Pizza <br>";
    }
    if (isset($_POST["Apple"])) {
        echo "You like Apple <br>";
    }
    if (isset($_POST["Drinks"])) {
        echo "You like Drinks <br>";
    }

    // Checks if item is empty or unchecked
    if (empty($_POST["Pizza"])) {
        echo "You dont like Pizza <br>";
    }
    if (empty($_POST["Apple"])) {
        echo "You dont like Apple <br>";
    }
    if (empty($_POST["Drinks"])) {
        echo "You dont like Drinks <br>";
    }
}   
*/

// Checkbox in Array
if (isset($_POST["button"])) { // Checks if button is submitted
    $foods = $_POST["foods"]; // Pass the checked items on this variable

    // Iterates the list of foods
    foreach ($foods as $food) {
        echo "{$food} <br>";
    }
} else {
    echo "Please choose an item";
}





?>