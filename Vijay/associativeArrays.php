<?php
    echo "Welcome to associative arrays in php";

    // // $arr = array('this', 'that', 'what');
    // // echo $arr[0];
    // // echo $arr[1];
    // // echo $arr[2];

    $favcol = array('shubam' => 'red', 'rohan' => 'green',
                        'harry' => 'brown', 8 => 'this');

    foreach ($favcol as $key => $value) {
        # code...
        echo "<br> Favorite color of $key is $value";
    }

?>