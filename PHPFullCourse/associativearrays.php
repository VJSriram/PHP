<?php

    // associative array = An array made of key => value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array("USA"=>"Washington, D.C.", 
                        "Japan"=> "Kyoto", 
                        "South Korea"=>"Seoul", 
                        "India" =>"New Delhi", 
                        "UK"=> "London");

    $capitals["UK"] = "England";
    $capitals["China"] = "Beijing";

    //array_pop($capitals);

    //array_shift($captials);

    echo count($capitals) . "<br>";

    foreach($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    }
?>