<?php

    $name = "Vijay is pro coder";
    echo $name;
    echo "<br>";
    
    // Dot operator . 
    // PHP strlen function
    echo "The length of my string is : " . strlen($name);
    echo "<br>";

    // PHP str_wrd_count function
    echo str_word_count($name);
    echo "<br>";

    // string reversal function
    echo strrev($name);
    echo "<br>";

    // find the index
    echo strpos($name, "is");
    echo "<br>";
    echo strpos($name, "pro");
    echo "<br>";

    // replace a string
    echo str_replace("Vijay", "Harry", $name);
    echo "<br>";

    // repeat function str_repeat
    echo str_repeat($name, 4);
    echo "<br>";

    // right trim - rtrim
    echo "<pre>";
    echo rtrim("    this is php tutorial    ");
    echo "<br>";

    // left trim - ltrim
    echo ltrim("    this is php tutorial    ");
    echo "<pre>";

?>