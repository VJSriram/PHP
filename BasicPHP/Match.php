<?php

    // Match statement introduced in PHP 8 and it won't work in other versions

 $paymentStatus = false;

 $paymentStatusDisplay = match($paymentStatus){
    1 => 'Paid',
    2 => 'Payment Declined',
    3 => 'Payment Processing',
    default => 'Unknown Payment Status'

 };

echo $paymentStatusDisplay;

?>