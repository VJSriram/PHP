<?php

    /*  hashing = transforming sensitive data (password)
                  into letters, numbers, and/or symbols via a 
                  mathematical process. (similar to encryption)
                  Hids the original data from 3rd parties.

    */

    $password = "passwordhashing";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    //echo $hash;

    if(password_verify("passwordhashing", $hash)){
        echo "You are logged in !";
    }
    else{
        echo "Incorrect password!";
    }
?>

18005382583