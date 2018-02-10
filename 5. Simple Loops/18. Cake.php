<?php
// Exam - 03 September 2017   92/100

$weight = intval(readline());
$length = intval(readline());
$cakeSize = $weight * $length;
$finished = true;

while (true) {
    $piecesOfCake = intval(readline());
    if ($piecesOfCake == "STOP" || $piecesOfCake < 0) {
        break;
    }
    $cakeSize -= $piecesOfCake;

    if ($cakeSize < 0) {
        $finished = false;
        break;
    }
}
if ($finished == false) {
    printf("No more cake left! You need %d pieces more.", abs($cakeSize));
} else {
    printf("%d pieces are left.", $cakeSize);
}