<?php
$num = intval(readline());
$maxNum = PHP_INT_MIN;
$sumElements = 0;

for ($i = 0; $i < $num; $i++) {
    $number = intval(readline());

    if ($number > $maxNum) {
        $maxNum = $number;
    }
    $sumElements += $number;
}

$sumElementsRem = $sumElements - $maxNum;
if ($maxNum == $sumElementsRem) {
    echo "Yes\n";
    printf("Sum = %d", $sumElementsRem);
} else {
    $difference = abs($maxNum - $sumElementsRem);

    echo "No\n";
    printf("Diff = %d", $difference);
}


