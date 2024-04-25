<?php
    // variable, anonymous & arrow functions 

    function sum(int|float ...$numbers): int|float {
        return array_sum($numbers);
    }

    $x = 'sum';

    if(is_callable($x)){
        echo $x(1, 2, 3, 4);
        echo '<br />';
    }else {
        echo 'Not callable';
        
    }


    $sumOne = function (int|float ...$numbers): int|float {
        return array_sum($numbers);
    };

    echo $sumOne(1, 2, 3, 4);


?>