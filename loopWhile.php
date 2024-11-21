<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="whileLoop.php" method="post">
                <input type="submit" name="stop" value="stop">
        </form>
</body>

</html>
<?php

//WHILE Loop

$counter = 0;

//Iterates counter
while ($counter < 10) {
        $counter++; //Add 1 every iteration
        echo "  <br> {$counter}";
}

echo "<br>";

$running = true;
$val = 0;
while ($running) {
        if (isset($_POST["stop"])) { //If button is clicked return true
                $running = false; // Set running false
        } else {
                $val++; // Add 1 every iteration
                echo "$val seconds <br>";
        }
}


?>