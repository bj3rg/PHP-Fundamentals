<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="inputRadio.php" method="post">
        <input type="radio" name="title" value="Sad"><span>Sad</span> <br>
        <input type="radio" name="title" value="Happy"><span>Happy</span> <br>
        <input type="radio" name="title" value="Excited"><span>Excited</span> <br>
        <input type="submit" name="button" value="submit">
    </form>
</body>

</html>

<?php

if (isset($_POST["button"])) {

    $titleName = null;
    //Checks if title has value
    if (isset($_POST["title"])) {
        $titleName = $_POST["title"];
    }
    //Uses switch case
    switch ($titleName) {
        case "Sad":
            echo "${titleName}";
            break;
        case "Happy":
            echo "${titleName}";
            break;
        case "Excited":
            echo "${titleName}";
            break;
        default:
            echo "Please choose";
            break;
    }
}

?>