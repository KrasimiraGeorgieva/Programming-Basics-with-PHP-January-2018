<?php

// Да се напише програма, която преобразува разстояние между следните 8 мерни
// единици: m, mm, cm, mi, in, km, ft, yd. Използвайте следните съответствия:
// 
//  входна единица	изходна единица
//  1 meter (m)         1000 millimeters (mm)
//  1 meter (m)         100 centimeters (cm)
//  1 meter (m)         0.000621371192 miles (mi)
//  1 meter (m)         39.3700787 inches (in)
//  1 meter (m)         0.001 kilometers (km)
//  1 meter (m)         3.2808399 feet (ft)
//  1 meter (m)         1.0936133 yards (yd)
//  
// Входните данни се състоят от три реда, въведени от потребителя:
// • Първи ред: число за преобразуване
// • Втори ред: входна мерна единица
// • Трети ред: изходна мерна единица (за резултата)
// Резултатът да се форматира до осмия знак след десетичната запетая.
// Примерен вход и изход                вход и изход
//           12    39370. 07886932      150    9503999.99393599
//           km                          mi
//           ft                          in

$numberOfTransformation = doubleval(readline());
$inputMeasure = strtolower(readline());
$outputMeasure = strtolower(readline());

$lenghtInMeters = 0.0;
$outputLenght = 0.0;

if ($inputMeasure == "m") {
    $lenghtInMeters = $numberOfTransformation / 1;
} else if ($inputMeasure == "mm") {
    $lenghtInMeters = $numberOfTransformation / 1000;
} else if ($inputMeasure == "cm") {
    $lenghtInMeters = $numberOfTransformation / 100;
} else if ($inputMeasure == "mi") {
    $lenghtInMeters = $numberOfTransformation / 0.000621371192;
} else if ($inputMeasure == "in") {
    $lenghtInMeters = $numberOfTransformation / 39.3700787;
} else if ($inputMeasure == "km") {
    $lenghtInMeters = $numberOfTransformation / 0.001;
} else if ($inputMeasure == "ft") {
    $lenghtInMeters = $numberOfTransformation / 3.2808399;
} else {
    $lenghtInMeters = $numberOfTransformation / 1.0936133;
}

if ($outputMeasure == "m") {
    $outputLenght = $lenghtInMeters * 1;
} else if ($outputMeasure == "mm") {
    $outputLenght = $lenghtInMeters * 1000;
} else if ($outputMeasure == "cm") {
    $outputLenght = $lenghtInMeters * 100;
} else if ($outputMeasure == "mi") {
    $outputLenght = $lenghtInMeters * 0.000621371192;
} else if ($outputMeasure == "in") {
    $outputLenght = $lenghtInMeters * 39.3700787;
} else if ($outputMeasure == "km") {
    $outputLenght = $lenghtInMeters * 0.001;
} else if ($outputMeasure == "ft") {
    $outputLenght = $lenghtInMeters * 3.2808399;
} else {
    $outputLenght = $lenghtInMeters * 1.0936133;
}

//$result = round($outputLenght, 4);
//echo "$result $outputMeasure";

//echo "$outputLenght $outputMeasure";
printf("%0.8f", $outputLenght);