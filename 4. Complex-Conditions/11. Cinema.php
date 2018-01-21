<?php

// В една кинозала столовете са наредени в правоъгълна форма в r реда и c 
// колони. Има три вида прожекции с билети на различни цени:
//• Premiere – премиерна прожекция, на цена 12.00 лева.
//• Normal – стандартна прожекция, на цена 7.50 лева.
//• Discount – прожекция за деца, ученици и студенти на намалена цена от 5.00 лева.
//Напишете програма, която чете тип прожекция (стринг), брой редове и брой 
//колони в залата (цели числа), въведени от потребителя, и изчислява общите 
//приходи от билети при пълна зала. Резултатът да се отпечата във формат като в
//примерите по-долу, с 2 знака след десетичната точка. 

$projectionType = strtolower(readline());
$numOfRows = intval(readline());
$numOfColumns = intval(readline());

$numOfSeats = $numOfRows * $numOfColumns;
$premierePrice = 12.00;
$normalPrice = 7.50;
$discountPrice = 5.00;
$totalIncome = -1.00;

if ($projectionType == "premiere"){
   $totalIncome = $numOfSeats * $premierePrice;
}
elseif ($projectionType == "normal"){
    $totalIncome = $numOfSeats * $normalPrice;
}
elseif ($projectionType == "discount"){
    $totalIncome = $numOfSeats * $discountPrice;
}
if($totalIncome > 0)
    printf("%.2f" . " leva", $totalIncome);