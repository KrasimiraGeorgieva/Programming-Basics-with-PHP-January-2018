<?php
// 20
// USD
// BGN

$currency = doubleval(readline());

$inputCurrency = readline();
$outputCurrency = readline();

$currensies = [
    "BGN" => 1,
    "USD" => 1.79549,
    "EUR" => 1.95583,
    "GBP" => 2.53405 
];

$result = $currency * ($currensies[$inputCurrency] / $currensies[$outputCurrency]);
//var_dump($result);
print_r(round($result,2) . ' ');
echo $outputCurrency;

// 35.91 BGN и 35.91BGN в джъдж 100/100