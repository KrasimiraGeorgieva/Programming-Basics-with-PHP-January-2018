<?php

 // Variant 1
$firstNumber = intval(readline());
$secondNumber = intval(readline());

while ($firstNumber != 0 && $secondNumber != 0) {
    if ($firstNumber > $secondNumber) {
        $firstNumber %= $secondNumber;
    } else {
        $secondNumber %= $firstNumber;
    }
}
printf("%d", max($firstNumber, $secondNumber));


// Variant 2
//$a = intval(readline());
//$b = intval(readline());
//while ($b != 0) {
//    $oldB = $b;
//    $b = $a % $b;
//    $a = $oldB;
//}
//echo "GCD = $a";