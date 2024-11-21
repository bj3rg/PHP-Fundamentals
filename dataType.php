<?php

//Data types in PHP

//String data type
$name = "Angelo";
$email = "angelokburog30@gmail.com";

//int data type
$age = 25;
$quantity = 5;

//Float data type
$price = 4.99;
$tax_rate = 2.5;

//Null data type
$total = null;

//Boolean data types
$online = true;


echo "Hello $name,<br> 
your email is <b> $email </b>  
<br> and your age is <b> $age </b> 
<br> you are online if 1 or 0 if offline: $online";

$total = $price * $quantity;

echo " <br> Your total spent is $total because you ordered $quantity pizza with each priced at $price";

?>