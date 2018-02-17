<?php

$n = intval(readline());
$num = 1;
for ($row = 1; $row <= $n; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        if ($col > 1) {
            echo " ";
        }
        echo $num;
        $num++;
        if ($num > $n) {
            //break;
            return;
        }
    }
    echo "\n";
//    if ($num > $n) {
//        break;
//    }
}

