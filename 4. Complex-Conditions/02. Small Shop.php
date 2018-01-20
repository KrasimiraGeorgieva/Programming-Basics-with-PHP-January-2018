<?php

$product = strtolower(readline());
$town = strtolower(readline());
$quontity = floatval(readline());

if ($town == "sofia"){
    if ($product == "coffee")
        echo $quontity * 0.50;
    elseif ($product == "water")
        echo $quontity * 0.80;
    elseif ($product == "beer")
        echo $quontity * 1.20;
    elseif ($product == "sweets")
        echo $quontity * 1.45;
    elseif ($product == "peanuts")
        echo $quontity * 1.60;
}

if ($town == "plovdiv"){
    if ($product == "coffee")
        echo $quontity * 0.40;
    elseif ($product == "water")
        echo $quontity * 0.70;
    elseif ($product == "beer")
        echo $quontity * 1.15;
    elseif ($product == "sweets")
        echo $quontity * 1.30;
    elseif ($product == "peanuts")
        echo $quontity * 1.50;
}

if ($town == "varna"){
    if ($product == "coffee")
        echo $quontity * 0.45;
    elseif ($product == "water")
        echo $quontity * 0.70;
    elseif ($product == "beer")
        echo $quontity * 1.10;
    elseif ($product == "sweets")
        echo $quontity * 1.35;
    elseif ($product == "peanuts")
        echo $quontity * 1.55;
}