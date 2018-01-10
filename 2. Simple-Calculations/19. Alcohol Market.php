<?php

$priceWhiskey = floatval(readline());
$beerInLiter = floatval(readline());
$wineInLiter = floatval(readline());
$rakiInLiter = floatval(readline());
$whiskeyInLiter = floatval(readline());

$priceRakiPerLiter = $priceWhiskey / 2;
$priceWinePerLiter = $priceRakiPerLiter - (0.4 * $priceRakiPerLiter);
$priceBeerPerLiter = $priceRakiPerLiter - (0.8 * $priceRakiPerLiter);
//var_dump($priceWinePerLiter);
//var_dump($priceBeerPerLiter);

$sumRaki = $rakiInLiter * $priceRakiPerLiter;
$sumWine = $wineInLiter * $priceWinePerLiter;
$sumBeer = $beerInLiter * $priceBeerPerLiter;
$sumWhiskey = $whiskeyInLiter * $priceWhiskey;

$totalSum = $sumRaki + $sumWine + $sumBeer + $sumWhiskey;
//var_dump($totalSum);

printf("%.2f", $totalSum);