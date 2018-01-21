<?php

// Напишете програма, която проверява дали точка {x, y} се намира върху някоя 
// от страните на правоъгълник {x1, y1} – {x2, y2}. Входните данни се четат от 
// конзолата и се състоят от 6 реда въведени от потребителя: десетичните числа 
// x1, y1, x2, y2, x и y (като се гарантира, че x1 < x2 и y1 < y2). Да се 
// отпечата “Border” (точката лежи на някоя от страните) или “Inside / Outside” 
// (в противен случай).

$x1 = doubleval(readline());
$y1 = doubleval(readline());
$x2 = doubleval(readline());
$y2 = doubleval(readline());
$x = doubleval(readline());
$y = doubleval(readline());

$horizontalBorder = ($x1 <= $x && $x <= $x2) && ($y == $y1 || $y == $y2);

$verticalBorder = ($y1 <= $y && $y <= $y2) && ($x == $x1 || $x == $x2);

if ($horizontalBorder || $verticalBorder)
{
    echo "Border";
}
else
    echo "Inside / Outside";