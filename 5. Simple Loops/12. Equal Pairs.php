<?php
$numberOfPairs = intval(readline());

$lastPairValue = 0;
$maxDifference = PHP_INT_MIN;
for ($i = 0; $i < $numberOfPairs; $i++) {
    $firstElement = intval(readline());
    $secondElement = intval(readline());
    $pairValue = $firstElement + $secondElement;

    if ($i > 0) {
        $difference = abs($pairValue - $lastPairValue);

        if ($difference > $maxDifference)
            $maxDifference = $difference;
    }

    $lastPairValue = $pairValue;
}

if ($maxDifference == 0 || $maxDifference == PHP_INT_MIN) {
    printf("Yes, value=%d\n", $lastPairValue);
} else {
    printf("No, maxdiff=%d\n", $maxDifference);
}