<?php

$goOn = true;
do {
    echo "Enter even number: ";
    $num = readline();
    if (!is_numeric($num)) {
        echo "Invalid number!\n";
    } elseif ($num - floor($num) != 0) {
        echo "Invalid number!\n";
    } elseif ($num % 2 != 0) {
        echo "Invalid number!\n";
    } else {
        $goOn = false;
    }
} while ($goOn == true);
echo "Even number entered: " . $num;