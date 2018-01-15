<?php

// Да се въведат 3 числа и да се отпечата дали са еднакви (yes / no).

$num1 = floatval(readline());
$num2 = floatval(readline());
$num3 = floatval(readline());

if (($num1 === $num2) && ($num2 === $num3)){
    echo "yes";
}
else{
    echo "no";
}