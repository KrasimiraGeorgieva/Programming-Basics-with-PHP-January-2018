<?php

Пета задача от междинния изпит на 24 април 2016. 

$n = intval(readline());
$row = (2 * ($n + 1) + ((2 * $n) + 1));

$dotUp = str_repeat('.', $n + 1);
$downDashes = str_repeat('_', (2 * $n) + 1);
echo "$dotUp" . "$downDashes" . "$dotUp" . "\n";

for ($i = $n; $i > 0; $i--) {
    $dot = str_repeat('.', $i);
    $dashes = str_repeat('_', ($row - 2 * $i) - 4);
    
    echo "$dot"."//"."$dashes"."\\\\"."$dot"."\n";
}
$dashesMid = str_repeat('_', ($row - 9) / 2);
echo "//"."$dashesMid".'STOP!'."$dashesMid"."\\\\"."\n";

for ($i = 0; $i < $n; $i++) {
    $dot = str_repeat('.', $i);
    $dashes = str_repeat('_', ($row - 2 * $i) - 4);
    
    echo "$dot"."\\\\"."$dashes"."//"."$dot"."\n";
}