
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <!-- GET METHOD -->
        <form method="get" action="GetXPost.php">
                <label> Username:</label>
                <input type="text" name="username"> <br>

                <label> Password:</label>
                <input type="password" name="password">
                
                <input type="submit" value="Log In">
        </form>

        <!-- POST METHOD -->
        <form method="post" action="index.php">
                <label> Quantity:</label>
                <input type="text" name="quantity"> <br>
                <input type="submit" value="Submit">
        </form>
</body>
</html>

<?php
        //GET method is appended in the url
        //better for search
        echo "user => {$_GET["username"]} <br>";
        echo "pass => {$_GET["password"]} <br>";

        //POST method is packaged inside the body and request is not cached
        //better for submitting
        $price = 5.55;
        $tax = 2.5;
        $quantity = $_POST["quantity"];
        $total = null;

        $total = $price * $quantity * $tax;

        echo "quantity => $quantity <br> price => $price <br> The total is => $total";

?>