<?php

declare(strict_types=1);

// function with named arguments
function sum(...$numbers): int|float {

    $sum = 0;
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}
$a = 5;
$b = 10;

echo sum($a, $b, 22, 34, 65, 71) . '<br/>';

//Using inbuild function
function sumOne(...$numbers): int|float {
    return array_sum($numbers);
}
$a = 5;
$b = 10;

echo sum($a, $b, 22, 34, 65, 71) . '<br/>';

?>