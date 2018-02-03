<?php

$n = intval(readline());
for ($i = 1; $i <= $n; $i++) {
    echo "*";
    for ($col = 0; $col < $n - 1; $col++) {
        echo " *";
    }
    echo "\n";
}