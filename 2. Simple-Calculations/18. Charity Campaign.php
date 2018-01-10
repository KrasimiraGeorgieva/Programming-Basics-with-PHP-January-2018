<?php

// Първа задача от изпита на 25 юни 2017

$daysCampaign = intval(readline());
$pastryCook = intval(readline());
$cakes = intval(readline());
$waffles = intval(readline());
$pancakes = intval(readline());

$cakesSumPerPastryCook = $cakes * 45; 
$wafflesSumPerPastryCook = $waffles * 5.80; 
$pancakesSumPerPastryCook = $pancakes * 3.20; 

$totalSumPerDay = ($cakesSumPerPastryCook + $wafflesSumPerPastryCook 
                   + $pancakesSumPerPastryCook) * $pastryCook;
//var_dump($totalSumPerDay);

$totalCharitySum = $totalSumPerDay * $daysCampaign;
//var_dump($totalCharitySum);
$costs = $totalCharitySum * 0.125;

$netSum = $totalCharitySum - $costs;
//var_dump($netSum);

printf("%.2f", $netSum);