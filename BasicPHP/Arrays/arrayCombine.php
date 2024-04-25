<?php

    require 'helpers.php';

    // array_combine(array $keys, array $value): array

    $array1 = ['a', 'b', 'c'];
    $array2 = [5, 10, 15];

    prettyPrintArray(array_combine($array1, $array2));



?>