<?php

    echo "Exploring multi dimensional array";

    $mdarray = array(array(1, 2, 3, 4),
                          (2, 3, 4, 5),
                          (3, 4, 5, 6));

    for ($i=0; $i < count(mdarray); $i++) { 
        for ($j=0; $j < count($mdarray[$i]); $j++) { 

           echo $mdarray[i][j];
           echo " ";
        }
        echo "<br>";
    }
    

?>