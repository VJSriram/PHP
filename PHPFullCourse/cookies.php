<?php

    /*
        cookie = Information about a user stored in a user's web-browser
                 targeted advertisements, browsing preferences, and other
                 non-sensitive data
            F12 -> applications to view cookies
    */

    setcookie("fav_food", "tacos", time() + - 0, "/");
    setcookie("fav_drink", "Fooluda", time() + (86400 * 3), "/");
    setcookie("fav_desert", "Ice cream", time() + (86400 * 4), "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br> ";
        
    }
    echo "<br>";

    // targeted advertisements
    if(isset($_COOKIE["fav_food"])){
        echo "BUY SOME {$_COOKIE["fav_food"]} !!!";

    }
    else{
        echo "I don't know your favorite food";
    }

?>