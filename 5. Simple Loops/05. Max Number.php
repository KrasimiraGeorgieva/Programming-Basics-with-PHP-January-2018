<?php


$n = intval(readline());

$max = PHP_INT_MIN; // smallest integer value
for ($i = 1; $i <= $n; $i++) {
    $num = intval(readline());
    if ($num > $max)
        $max = $num;
}
echo "max = " . $max;