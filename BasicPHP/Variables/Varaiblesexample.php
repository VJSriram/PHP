<?php

    $x = 10; // Global vairable


    function myTest(){
        $y = 20; // Local variable
    // calling Y inside the function 
    echo "<p>Local variable y inside function is: $y</p>";

    }

    myTest();
    echo "<p>Globale variable x outside function is: $x</p>";



?>