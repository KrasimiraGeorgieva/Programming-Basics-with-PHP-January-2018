<?php

//Variant 1
$n = intval(readline());
$num = abs($n);
$sum = 0;
while ($num > 0) {
    $sum = $sum + ($num % 10);
    $num = floor($num / 10);
}

echo "$sum\n";


// Variant 2
        
//$n = intval(readline());
//$sum = 0;
//do {
//    $sum = $sum + ($n % 10);
//    $n = floor($n / 10);
//} while ($n > 0);
//echo "Sum of digits: $sum";
