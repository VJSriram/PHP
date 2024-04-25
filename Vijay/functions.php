<?php

echo "Welcome to php tutorial on functions <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        # code...
        $sum += $value;
    }
    return $sum;

}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        # code...
        $sum += $value;
        $i++;
    }
    return $sum/$i;

}

$raj = [98, 78, 76, 67, 88, 90];
$sumMarks = processMarks($raj);
echo "Total scored by Rohan out of 600 is $sumMarks <br>";
$sumMarks = avgMarks($raj);
echo "Average scored by Rohan out of 600 is $sumMarks % <br>";

$harry = [90, 92, 88, 94, 98, 99];
$avgMarksHarry = processMarks($harry);
echo "Total scored by Harry out of 600 is $avgMarksHarry <br>";
$sumMarks = avgMarks($harry);
echo "Average scored by Harry out of 600 is $sumMarks % <br>";

?>