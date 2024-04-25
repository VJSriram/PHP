<?php 

    //switch = replacement to using many elseif statements
    // more efficient, less code to write

    $grade = "D";

    switch($grade){
        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did ok";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "D":
            echo "You failed";
            break;
        default:
            echo "{$grade} is not valid";
    }

?>