<?php

    // constants

    define('status_paid', 'paid');

    echo defined('status_paid'). '<br>';

    // another way to define constants

    const STATUS_PAID = 'paid';

    echo STATUS_PAID . '<br>';


    echo PHP_VERSION;

?>