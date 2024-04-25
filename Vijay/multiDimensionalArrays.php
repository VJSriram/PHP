<?php
    echo "Welcome to multi dimensional arrays in PHP";

    // multi dimensional array
    $multiDim = array(array(2, 5, 7, 8), 
                           (1, 2, 3. 1), 
                           (4. 5. 0, 1));
    
    for ($i=0; $i < count($multiDim); $i++) {
        for ($j=0; $j < count($multiDim[$i]); $j++) { 
            echo $multiDim[$i][$j];
            echo " ";
           
        } 
        echo "<br>";
    }

?>