<?php

    /* Variable = a reusable container that holds data 
    string, integer, float, boolean */

    //String 
    $name = 'Vijay Sriram';
    $food = "dhaivada";
    $email = "selflearn@gmail.com";

    //Integer
    $age = 21;
    $users = 2;
    $quantity = 3;

    //float
    $gpa = 2.5;

    $price = 4.99;

    // boolean true or false
    $employed = false;
    $online = true;

    echo "My name is {$name} <br>";

    echo "You like {$food} <br>";

    echo "Your email is {$email} <br>";

    echo "You are {$age} years old <br>";

    echo "There are {$users} online <br>";

    echo "You would like to buy {$quantity} items<br>";

    echo "Your gpa is {$gpa} <br>"; 

    echo "Your {$food} is \${$price} <br>";

    echo "A user is online {$online} status <br>"
?>