<?php

    // Switch statement 


    $paymentStatus = 'Do not';

    switch($paymentStatus){
        case 'paid':
            echo 'Payment processed';
            break;

        case 'declined':
            echo 'Payment Declined';
            break;

        case 'pending':
            echo 'Payment pending';
            break;
        
        default:
            echo 'Unknown Payment status';
    }



?>