<?php

$n = intval(readline());
$starsInTop = null;
if ($n % 2 == 1) {
    $starsInTop = 1;
} else {
    $starsInTop = 2;
}
//Top part
$numberOfDashesInTop = floor(($n - $starsInTop) / 2);
$dashes = str_repeat('-', $numberOfDashesInTop);
$stars = str_repeat('*', $starsInTop);
echo "$dashes" . "$stars" . "$dashes\n";


//Mid part
$numberOfDashesBetweenStars = 0;
if ($n % 2 == 0) {
    $numberOfDashesBetweenStars = 2;
} else {
    $numberOfDashesBetweenStars = 1;
}
$numberOfDashesPerSide = floor(($n - 2 - $numberOfDashesBetweenStars) / 2);

$upperPartHeight = 0;
if ($n % 2 == 1) {
    $upperPartHeight = $n / 2;
} else {
    $upperPartHeight = (floor($n / 2) - 1);
}

for ($i = 1; $i <= $upperPartHeight; $i++) {
    $dashesPerSide = str_repeat('-', $numberOfDashesPerSide);
    $dashesBetweenStars = str_repeat('-', $numberOfDashesBetweenStars);
    echo "$dashesPerSide*$dashesBetweenStars*$dashesPerSide\n";
    $numberOfDashesPerSide--;
    $numberOfDashesBetweenStars += 2;
}

$numberOfDashesPerSideDown = 1;
$numberOfDashesBetweenStarsDown = ($n - 4);
$downPartHeight = $upperPartHeight - 1;

for ($i = 1; $i <= $downPartHeight; $i++) {
    $dashesPerSideDown = str_repeat('-', $numberOfDashesPerSideDown);
    $dashesBetweenStarsDown = str_repeat('-', $numberOfDashesBetweenStarsDown);
    echo "$dashesPerSideDown*$dashesBetweenStarsDown*$dashesPerSideDown\n";
    $numberOfDashesPerSideDown++;
    $numberOfDashesBetweenStarsDown -= 2;
}
//Down part
if ($n > 2) {
    $dashes = str_repeat('-', $numberOfDashesInTop);
    $stars = str_repeat('*', $starsInTop);
    echo "$dashes" . "$stars" . "$dashes\n";
}


// Кода е от презентацията не е коректен
//$leftRight = ($n - 1) / 2;
//for ($i = 1; $i <= ($n-1) / 2; $i++)
//{ 
//  // Draw the top part
//  echo str_repeat("-", $leftRight);
//  echo "*";
//  $mid = $n - 2 * $leftRight - 2;
//  if ($mid >= 0)
//  {
//    echo str_repeat("-", $mid);
//    echo "*";
//  }
//  echo str_repeat("-", $leftRight) . "\n";
//  $leftRight--;
//} 

