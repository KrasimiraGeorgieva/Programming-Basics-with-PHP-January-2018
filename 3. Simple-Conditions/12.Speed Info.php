<?php
// Да се напише програма, която чете скорост (десетично число), въведена 
// от потребителя, и отпечатва информация за скоростта. При скорост
// до 10 (включително) отпечатайте “slow”. При скорост над 10 и до 50 
// отпечатайте “average”. При скорост над 50 и до 150 отпечатайте “fast”. 
// При скорост над 150 и до 1000 отпечатайте “ultra fast”. При по-висока скорост
// отпечатайте “extremely fast”.

// Примерен вход  изход
//          8     slow
//          160   ultra fast
//          49.5  average
//          126   fast
//          3500  extremely fast

$speed = floatval(readline());

if ($speed <= 10) {
    echo "slow";
} elseif ($speed > 10 && $speed <= 50) {
    echo "average";
} elseif ($speed > 50 && $speed <= 150) {
    echo "fast";
} elseif ($speed > 150 && $speed <= 1000) {
    echo "ultra fast";
} else
    echo "extremely fast";