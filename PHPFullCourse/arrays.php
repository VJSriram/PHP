<?php
    // array = "variable" which can hold more than one value at a time

    /*$food_1 = "apple";
    $food_2 = "orange";
    $food_3 = "banana";
    $food_4 = "coconut"; */

    $foods = array("apple", "orange", "banana", "coconut");

    $foods[0] = "pineapple";
    // push function
    array_push($foods, "watermelon", "kiwi");

    // pop function will remove last element in array
    array_pop($foods);

    array_shift($foods);

    //reversed function
    $foods = array_reverse($foods);

    echo count($foods) . "<br>";

    foreach($foods as $food){
        echo $food . "<br>";

    }


?>