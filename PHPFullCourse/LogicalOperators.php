<?php

    // logical operators = combine conditional statements
    // if(condition1 || condition2)

    // && = True if both conditions are true
    // || = True if at least one condition is true
    // ! = True if false. False if true.

    $temp = 15;
    $cloudy = false;

    if($temp < 0 || $temp > 30){
        echo "The weather is bad.<br>";

    }
    else{
        echo "The weather is good.<br>";
    }

    if(!$cloudy){
        echo "It's cloudy";
    }
    else {
        echo "it's sunny";
    }


?>