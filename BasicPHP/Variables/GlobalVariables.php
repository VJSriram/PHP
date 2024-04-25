<?php

    // A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

    $x = 5; // global scope

    function myGlobal() {
    
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";

    }

    myGlobal();
    echo "<p>Variable x outside function is: $x</p>";
        

    

?>