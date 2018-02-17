<?php

//$n = intval(readline());
//$firstNum = 1;
//$secondNum = 1;
//for ($cnt = 0; $cnt < $n - 1; $cnt++)
//{
//   $nextNum = $firstNum + $secondNum;
//   $firstNum = $secondNum;
//   $secondNum = $nextNum;
//}
//
//echo $secondNum;


$n = intval(readline());
$f0 = 1;
$f1 = 1;
for ($i = 0; $i < $n - 1; $i++) {
    $fNext = $f0 + $f1;
    $f0 = $f1;
    $f1 = $fNext;
}

echo $f1;
