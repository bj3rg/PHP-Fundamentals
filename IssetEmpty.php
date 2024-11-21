<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="functions.php" method="post">
    <label>Username</label>
    <input type="text" name="username">
    <label>Password</label>
    <input type="password" name="password">

    <input type="submit" value="Login" name="login"> <br>

    </form>
</body>
</html>

<?php 
//isset()  = Returns true if variable is declared and non null
//empty() = Returns true if variable is not declared

    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";

    }


if(isset($_POST["login"])){ //Checks if the button has value or clicked
    $username = $_POST["username"];
    $password = $_POST["password"];

    //Checks if empty
    if(empty($username)){
        echo "username is empty";
    }else{
        echo "Hello {$username}";
    }
    echo "<br>";

    //Checks if empty
    if(empty($password)){
        echo "password is empty";
    }else{
        echo "Your password is {$password}";
    }
    echo "<br>";
}

$username = ""; //Empty = true ; Isset = True

if(isset($username)){
    echo "This variable is set <br>"; //Output
}else{
    echo "This variable aint set <br>";
}


if(empty($username)){
    echo "This variable is empty"; //Output
}else{
    echo "This variable is not empty";
}

?>
