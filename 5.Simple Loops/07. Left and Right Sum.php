<?php

$n = intval(readline());

//Left side
$leftSum = null;
for ($i = 1; $i <= $n; $i++) {
    $number = intval(readline());
    $leftSum += $number;
}
//Right side
$rightSum = null;
for ($i = 1; $i <= $n; $i++) {
    $number = intval(readline());
    $rightSum += $number;
}

if ($leftSum == $rightSum) {
    printf("Yes, sum = %d", $leftSum);
} else {
    $difference = abs($leftSum - $rightSum);
    printf("No, diff = %d", $difference);
}