<?php

// Дадено е цяло число – брой точки. Върху него се начисляват бонус точки
// по правилата, описани по-долу. Да се напише програма, която пресмята бонус
// точките за това число и общия брой точки с бонусите.
// • Ако числото е до 100 включително, бонус точките са 5.
// • Ако числото е по-голямо от 100, бонус точките са 20% от числото.
// • Ако числото е по-голямо от 1000, бонус точките са 10% от числото.
// • Допълнителни бонус точки (начисляват се отделно от предходните):
//  o За четно число  + 1 т.
//  o За число, което завършва на 5  + 2 т.
//  
//Примерен вход и изход   вход   и   изход
//          20     6      15875      1589.5
//                 26                17464.5

echo "Enter score: ";
$num = intval(readline());
$bonusScore = 0.0;

if ($num > 1000) {
    $bonusScore = $num * 0.10;
} elseif ($num > 100) {
    $bonusScore = $num * 0.20;
} elseif ($num <= 100) {
    $bonusScore = 5;
}

if ($num % 10 == 5) {
    $bonusScore += 2;
} elseif ($num % 2 == 0) {
    $bonusScore += 1;
}
$total = round($num + $bonusScore,2);
//var_dump($total);
echo "Bonus score: $bonusScore";
echo "\n";
echo "Total score: $total";