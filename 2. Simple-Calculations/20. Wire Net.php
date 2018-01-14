<?php

//05.11.2017

//Един човек има правоъгълен двор, който иска да огради с мрежа. 
//Напишете програма, която пресмята колко: 
//• линейни метра мрежа ще му е нужна, за да огради двора
//• ще струва това при дадена цена на линеен метър 
//• ще тежи закупената мрежа при дадена височина и тегло на квадратен метър 

//Вход
//От конзолата се четат 5 числа:
//1.Дължината в метри на мястото - цяло число в интервала [10 ... 150];
//2.Широчината в метри на мястото - цяло число в интервала [10 ... 150];
//3.Височината на мрежата в метри - реално число в интервала [0.50 ... 3.50];
//4.Цената на един линеен метър от мрежата в лева - реално число в интервала [0.50 ... 10.00];
//5.Теглото на един квадратен метър от мрежата в килограм - реално число в интервала [0.50 ... 5.00].
//Изход
//На конзолата да се отпечатат 3 числа:
//1.Дължината в метри на мрежата, която трябва да бъде закупена;
//2.Цената в лева на мрежата, която трябва да бъде закупена, закръглена до втория знак;
//3.Теглото на цялата мрежа, която трябва да бъде закупена, закръглено до третия знак. 

//Примерен вход и изход
//
//10      120
//50      252.00
//1.5     171.000
//2.10
//0.95


$lenghtInMeters  = intval(readline());
$widthInMeters  = intval(readline());
$heightNet = floatval(readline());
$priceNetPerMeter = floatval(readline());
$weightNetSquareMeter = floatval(readline());

$netLenght = (2 * $lenghtInMeters) + (2 * $widthInMeters);
$totalNetPrice = $netLenght * $priceNetPerMeter;
$netArea = $netLenght * $heightNet;
$netWeight = $netArea * $weightNetSquareMeter;
//var_dump($netWeight);

echo $netLenght . "\n";
printf("%.2f", $totalNetPrice);
echo "\n";
printf("%.3f", $netWeight);