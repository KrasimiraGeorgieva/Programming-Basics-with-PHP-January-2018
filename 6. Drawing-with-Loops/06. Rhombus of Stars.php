<?php

$n = intval(readline());
$stars = 1;
$spaces = $n - 1;

for ($row = 0; $row <= $n - 1; $row++) {
    for ($i = 1; $i <= $spaces; $i++) {
        echo " ";
    }
    echo "*";
    for ($i = 1; $i <= $stars - 1; $i++) {
        echo " *";
    }
    echo "\n";
    $stars++;
    $spaces--;
}

$spacesDown = 1;
$starsDown = $n - 1;
for ($row = 0; $row < $n - 1; $row++) {
    for ($i = 1; $i <= $spacesDown; $i++) {
        echo " ";
    }
    echo "*";
    for ($i = 1; $i <= $starsDown - 1; $i++) {
        echo " *";
    }
    echo "\n";
    $starsDown--;
    $spacesDown++;
}