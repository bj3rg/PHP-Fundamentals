<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <form action="forLoop.php" method="post">
                <label>Number: </label>
                <input type="text" name="number">
                <input type="submit" value="submit"> 
        </form>
</body>
</html>

<?php 

// //Increment
// for($i=0; $i < 20; $i+=3){
//     echo "<br>" . $i;
// }    
// echo "<br>";

// //Decrement
// for($z=10; $z > 0; $z-- ){
//         echo "<br>" . $z;
// }

//get number value submitted in forms
$number = $_POST["number"];
//INCREMENT
echo "This is for increment <br>";
for($i =0 ; $i <= $number; $i++ ){
        echo $i . "<br>";
}

//DECREMENT
echo "<br> This is for decrement <br>";
for($i = $number ; $i > 0; $i-- ){
        echo $i . "<br>";
}

?>