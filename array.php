<?php
    //array_push() -> add item 
    //array_pop() -> delete last item
    //array_shift() -> delete first item
    //array_reverse() -> reverse the array
    //count() -> counts item

        //ARRAY = holds more than one value
$foods = array("apple", "coconut", "cocoa");

echo "<b>Initialized Foods List </b> <br>";
foreach($foods as $food){
        echo $food . "<br>";
}
echo "<br> <b>Foods after push method </b> <br>";

// PUSH = Add item in array 
array_push($foods, "pineapple", "kiwi");
foreach($foods as $food){
        echo $food . "<br>";
}

echo "<br> <b>Foods after pop method </b> <br>";

//POP = Remove last item
array_pop($foods);
foreach($foods as $food){
        echo $food . "<br>";
}

echo "<br> <b>Foods after Shift method </b> <br>";

//Shift = Removes first item
array_shift($foods);
foreach($foods as $food){
        echo $food . "<br>";
}


echo "<br> <b> Foods after Reversing</b> <br>";
//Reverse = Reverse array
$reverse_food = null;
$reversed_food = array_reverse($foods);
foreach($reversed_food as $food){
        echo "$food <br>";
}

echo "<br> Total food count <br>";
$total = count($foods);
echo $total;

?>