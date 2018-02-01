<?php

$n = intval(readline());

$oddSum = null;
$evenSum = null;
for ($i = 0; $i < $n; $i++) {
    $element = intval(readline());
    if ($i % 2 == 0) {
        $evenSum += $element;
    } else {
        $oddSum += $element;
    }
}

if ($oddSum == $evenSum) {
    echo "Yes\n";
    printf("Sum = %d", $oddSum);
} else {
    $diffSum = abs($oddSum - $evenSum);
    echo "No\n";
    printf("Diff = %d", $diffSum);
}


