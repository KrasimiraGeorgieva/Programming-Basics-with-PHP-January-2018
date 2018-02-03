<?php

$n = intval(readline());
for ($i = 1;$i <= $n;$i++) {
    $row = str_repeat('*', $n);
    echo $row . "\n";
}