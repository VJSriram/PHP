<?php

    /* php.ini & configuration */
    // How to work with PHP's configuration File

    // error_reporting, error_log, display_errors
    var_dump(ini_get('display_errors'));
    ini_set('display_errors', 0);
    $array = [1];

    echo $array[3];


?>