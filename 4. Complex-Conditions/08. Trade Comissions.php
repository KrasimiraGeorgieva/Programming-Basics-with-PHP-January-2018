<?php

// Напишете конзолна програма, която чете име на град и обем на продажби , 
// въведени от потребителя, и изчислява и извежда размера на търговската 
// комисионна според горната таблица. Резултатът да се изведе закръглен с 2 
// цифри след десетичната точка. При невалиден град или обем на продажбите 
// (отрицателно число) да се отпечата “error”.

$town = strtolower(readline());
$sales = doubleval(readline());

$comission = -1.0;

if ($town == "sofia"){
    if (0 <= $sales && $sales <= 500) $comission = 0.05;
    elseif (500 < $sales && $sales <= 1000) $comission = 0.07;
    elseif (1000 < $sales && $sales <= 10000) $comission = 0.08;
    elseif (10000 < $sales) $comission = 0.12;
}
elseif ($town == "varna"){
    if (0 <= $sales && $sales <= 500) $comission = 0.045;
    elseif (500 < $sales && $sales <= 1000) $comission = 0.075;
    elseif (1000 < $sales && $sales <= 10000) $comission = 0.10;
    elseif (10000 < $sales) $comission = 0.13;
}
elseif ($town == "plovdiv"){
    if (0 <= $sales && $sales <= 500) $comission = 0.055;
    elseif (500 < $sales && $sales <= 1000) $comission = 0.08;
    elseif (1000 < $sales && $sales <= 10000) $comission = 0.12;
    elseif (10000 < $sales) $comission = 0.145;
}

if ($comission >= 0)
    printf("%.2f", $comission * $sales);
else
    echo "error";