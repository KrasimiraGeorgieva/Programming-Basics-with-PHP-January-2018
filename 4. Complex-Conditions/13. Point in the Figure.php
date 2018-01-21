<?php

// Фигура се състои от 6 блокчета с размер h * h, разположени като на фигурата 
// вдясно. Долният ляв ъгъл на сградата е на позиция {0, 0}. Горният десен ъгъл
// на фигурата е на позиция {2*h, 4*h}. На фигурата координатите са дадени 
// при h = 2.
// 
// Напишете програма, която чете цяло число h и координатите на дадена точка 
// {$x, $y} (цели числа), въведени от потребителя, и отпечатва дали точката е 
// вътре във фигурата (inside), вън от фигурата (outside) или на някоя от 
// стените на фигурата (border).

$h = intval(readline());
$x = intval(readline());
$y = intval(readline());

$insideHorizontalRectangle = ($x > 0 && $x < 3 * $h) && ($y > 0 && $y < $h);
$insideVerticalRectangle = ($x > $h && $x < 2 * $h) && ($y > $h && $y < 4 * $h);
$onMiddleSide = ($x > $h && $x < 2 * $h && $y == $h);

$outsideHorizontalRectangle = ($x < 0 || $x > 3 * $h) || ($y < 0 || $y > $h);
$outsideVerticalRectangle = ($x < $h || $x > 2 * $h) || ($y < $h || $y > 4 * $h);

if ($insideHorizontalRectangle || $insideVerticalRectangle || $onMiddleSide){
    echo "inside";
}
elseif ($outsideHorizontalRectangle && $outsideVerticalRectangle){
    echo "outside";
}
else {
    echo "border";
}