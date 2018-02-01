<?php

$n = intval(readline());

$minNumber = PHP_INT_MAX;
for ($i = 1; $i <= $n; $i++) {
    $num = intval(readline());
    $minNumber = min($num, $minNumber);
}
echo $minNumber;