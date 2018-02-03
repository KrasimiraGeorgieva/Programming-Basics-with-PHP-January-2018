<?php

$n = intval(readline());
for ($i = 1; $i <= $n; $i++) {
    echo "$";
    for ($col = 1; $col < $i; $col++) {
        echo " $";
    }
    echo "\n";
}