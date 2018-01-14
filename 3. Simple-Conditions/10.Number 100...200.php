<?php

// Да се напише програма, която чете цяло число, въведено от потребителя,
// и проверява дали е под 100, между 100 и 200 или над 200. Да се отпечатат
// съответно съобщения като в примерите по-долу:
// Примерен         вход                  изход
//                  95	                  Less than 100
//                  120	                  Between 100 and 200
//                  210	                  Greater than 200

$number = intval(readline());
//var_dump($number);
if ($number < 100){
    echo "Less than 100";
}
elseif ($number >= 100 && $number <= 200){
    echo "Between 100 and 200";
}
elseif($number > 200){
    echo "Greater than 200";
}