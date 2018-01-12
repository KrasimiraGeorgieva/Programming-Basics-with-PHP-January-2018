<?php

$x1 = readline();
$y1 = readline();
$x2 = readline();
$y2 = readline();

$width = abs($x1 - $x2);
$height = abs($y1 - $y2);

printf("Area = %.2f\n", $width * $height); //Area = 1500.00
printf("Perimeter = %.2f", 2 * ($width + $height)); //Perimeter = 160.00
