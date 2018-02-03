<?php

$n = intval(readline());
for ($row = 0; $row < $n; $row++) {
    if ($row == 0 || $row == $n - 1) {
        echo '+';
    } else {
        echo '|';
    }

    for ($col = 0; $col < $n - 2; $col++) {
        echo ' -';
    }
    if ($n > 1) {
        echo ' ';
        if ($row == 0 || $row == ($n - 1)) {
            echo '+';
        } else {
            echo '|';
        }
        echo "\n";
    }
}