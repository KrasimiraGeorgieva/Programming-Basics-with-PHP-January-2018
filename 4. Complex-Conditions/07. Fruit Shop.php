<?php

// Напишете програма, която чете от конзолата плод (banana / apple / orange / 
// grapefruit / kiwi / pineapple / grapes), ден от седмицата (Monday / Tuesday /
// Wednesday / Thursday / Friday / Saturday / Sunday) и количество 
// (десетично число) , въведени от потребителя, и пресмята цената според цените
// от таблиците по-горе. Резултатът да се отпечата закръглен с 2 цифри след 
// десетичната точка. При невалиден ден от седмицата или невалидно име на плод 
// да се отпечата “error”.

$fruit = strtolower(readline());
$dayOfWeek = strtolower(readline());
$quantity = doubleval(readline());

$price = -1.0;

if ($dayOfWeek == "monday" || $dayOfWeek == "tuesday" || $dayOfWeek == "wednesday" ||
    $dayOfWeek == "thursday" || $dayOfWeek == "friday"){
    if ($fruit == "banana") $price = 2.50;
    elseif ($fruit == "apple") $price = 1.20;
    elseif ($fruit == "orange") $price = 0.85;
    elseif ($fruit == "grapefruit") $price = 1.45;
    elseif ($fruit == "kiwi") $price = 2.70;
    elseif ($fruit == "pineapple") $price = 5.50;
    elseif ($fruit == "grapes") $price = 3.85;
}
elseif ($dayOfWeek == "saturday" || $dayOfWeek == "sunday"){
    if ($fruit == "banana") $price = 2.70;
    elseif ($fruit == "apple") $price = 1.25;
    elseif ($fruit == "orange") $price = 0.90;
    elseif ($fruit == "grapefruit") $price = 1.60;
    elseif ($fruit == "kiwi") $price = 3.00;
    elseif ($fruit == "pineapple") $price = 5.60;
    elseif ($fruit == "grapes") $price = 4.20;
}

if ($price >= 0)
    printf("%.2f", $price * $quantity);
else
    echo "error";