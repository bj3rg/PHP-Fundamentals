<?php

//SWITCH CASE Function 

$grade = "A";

switch($grade){
    case "A":
        echo "Excellent grade";
        break; //need to be included to break into the current statement
    case "B":
        echo "Thats a good grade ";
        break;
    case "C":
        echo "Thats a fine grade";
        break;
    case "D": 
        echo "Thats a bad grade";
        break;
    case "F":
        echo "You failed";
        break;
    default: 
        echo "{$grade} is not a valid grade";
}
echo "<br> Current Date is: =>";
$date = date("l");
switch($date){
        case "Monday":
                echo "hate mondays";
                break;
        case "Tuesday":
                echo "4 more days til weekends";
                break;
        case "Wednesday" :
                echo "Need to work more";
                break;
        case "Thursday":
                echo "Its THURSDAYYY";
                break;
        case "Friday":
                echo "It's the last day of work";
                break;
        case "Saturday": 
                echo "Its party party";
                break;
        case "Sunday":
                echo "More party more gala";
                break;

}       


?>