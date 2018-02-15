<?php

$n = intval(readline());
$num = 1;
for ($i = 0; $i <= $n; $i += 2) {
    echo $num . "\n";
    $num = $num * 2 * 2;
}
