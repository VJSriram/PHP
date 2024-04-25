<?php

    $date = date("l jS \of F Y h:i:s A");

    switch($date){
        case "Monday":
            echo "I hate Monday";
            break;
        case "Tuesday":
            echo "It is taco tuesday!";
            break;
        case "Wednesday":
            echo "Work week is half over!";
            break;
        case "Thursday":
            echo "It's almost the weekend!";
            break;
        case "Friday":
            echo "It's weekend!";
            break;
        case "Saturday":
            echo "Time to party!";
            break;
        case "Sunday":
            echo "Time to relax!";
            break;
        default:
            echo "{$date} is not valid";
    }


?>