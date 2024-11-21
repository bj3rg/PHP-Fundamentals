<?php

//If Else Statement
 
 $age = 99;

 if($age >= 18 && $age <= 99){
        echo "you are eligible to enter the site.";
 }elseif($age <= 0){
        echo "invalid age!";
 }elseif($age >= 100){
        echo "you are too old";
 }else{
        echo "you are a minor";
 }


?>