<?php

    $paymentMethod =  3;

    $paymentMethodDisplay = match($paymentMethod){
        1 => 'Check/Money Order',
        2 => 'Bank Tansfer',
        3 => 'PayPal',
        4 => 'Braintree',
        5 => 'Zero total payment',
        default => 'Unknown payment method'

    };

    echo $paymentMethodDisplay;


?>