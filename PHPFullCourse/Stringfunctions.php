<?php

    $username = "Bro Please learn Coding";
    $phone = "123-456-7890";


    //$username = strtolower($username); - string lowercase
    
    //$username = strtoupper($username); - string uppercase

    //$username = trim($username);

    // $username = str_pad($username, 11, "7");

    // $username = str_replace("-", "", $phone);

    //$username = strrev($username);

    // $username = str_shuffle($username);

    // $equals = strcmp($username, "Bro Code");

    //$index = strpos($phone, "-");

    //$firstname = substr($username, 0, 3);

    //$lastname = substr($username, 4);

    $fullname = explode(" ", $username);

    foreach($fullname as $name){
        echo $name . "<br>";
    }

    echo $lastname;

?>