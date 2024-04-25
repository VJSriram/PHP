<?php

    echo "Welcome to the world of foreach loop <br>";

$arr = array("bananas", "apples", "Harpic", "Bread", "oranges", "graphes");

// for ($i=0; $i < count($arr); $i++) { 
//     # code...
//     echo $arr[$i];
//     echo "<br>";
// }

// Better way to do this - foreach loops
foreach ($arr as $value) {
    # code...
    echo "$value <br>";
}

?>