<?php

//Variant 1
$number = intval(readline());
$factorial = 1;

for ($i = 1; $i <= $number; $i ++) {
    $factorial *= $i;
}

echo "$factorial\n";


// Variant 2
//$n = intval(readline());
//$fact = 1;
//do {
//    $fact = $fact * $n;
//    $n--;
//} while ($n > 1);
//echo $fact;
