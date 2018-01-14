<?php

// Да се напише програма, в която потребителят въвежда вида и размерите на
// геометрична фигура и пресмята лицето й. Фигурите са четири вида: квадрат
// (square), правоъгълник (rectangle), кръг (circle) и триъгълник (triangle).
// На първия ред на входа се чете вида на фигурата (square, rectangle, circle
// или triangle). Ако фигурата е квадрат, на следващия ред се чете едно число
// – дължина на страната му. Ако фигурата е правоъгълник, на следващите два реда
// се четат две числа – дължините на страните му. Ако фигурата е кръг, на 
// следващия ред чете едно число – радиусът на кръга. Ако фигурата е триъгълник,
// на следващите два реда четат две числа – дължината на страната му и дължината
// на височината към нея. Резултатът да се закръгли до 3 цифри след десетичната
// точка.

// Примерен вход    изход  вход      изход  вход    изход    вход      изход
//          square  25     rectangle 17.5   circle  113.097  triangle  45
//          5              7                6                4.5
//                         2.5                               20

$inputFigure = readline();
$area = 0.00;

if ($inputFigure === "square"){
    $sideA = floatval(readline());
    $area = pow($sideA, 2);
}

if ($inputFigure === "rectangle"){
    $sideA = floatval(readline());
    $sideB = floatval(readline());
    $area = $sideA * $sideB;
}

if ($inputFigure === "circle"){
    $radius = floatval(readline());
    $area = pi() * pow($radius, 2);
}

if ($inputFigure === "triangle"){
    $sideA = floatval(readline());
    $height = floatval(readline());
    $area = ($sideA * $height) / 2.0;
}

printf("%0.3f", $area);