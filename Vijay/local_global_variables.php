<?php

    echo "Welcome to scope and local/global vars in php <br>";

    // global vaariables
    $a = 98;
    $b = 10;

    function printValue(){
        //local vairables
        $a = 10;
        $b = 100;

        // Give access to global variables
        global $a, $b;
       // $a = 100;
       // $b = 1000;

        echo "<br> The value of your variable a is $a and b is $b";
    }



    echo $a;
    printValue();
    echo "<br> The value of your variable a is $a and b is $b";
    echo "<br>";
    //echo var_dump($GLOBALS);

    echo var_dump($GLOBALS["a"]);
    echo var_dump($GLOBALS["b"]);

?>