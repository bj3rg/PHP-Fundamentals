<?php
        // LOGICAL OPERATORS => combines conditional statements
        // &&  = both are true 
        // ||  = one must be true
        // !   = not true

$temperature = 1000006;
$cloudy = false;

        if($temperature > 0 &&  $temperature < 30 ){
                echo"The weather is cold <br>";
        }else{
                echo"The weather is bad <br>";
        }

        if(!$cloudy) {
                echo"It is cloudy <br>";
        }else{
                echo "It is sunny <br>";
        }


// Using AND statement &&
$citizen = true;
$age = 19;

if($age >= 18 && $citizen){
        echo "You are able to vote <br>";
}else{
        echo "You are not able to vote <br>";
}

// Using OR statement ||
$child = false;
$senior = false;
$ticket = null;

if($child || $senior){
        $ticket = 15;
}else{
        $ticket = 25;
}
echo "The price for your ticket is => {$ticket}"
?>