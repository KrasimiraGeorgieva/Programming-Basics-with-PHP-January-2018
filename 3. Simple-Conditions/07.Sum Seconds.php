<?php

// Трима спортни състезатели финишират за някакъв брой секунди (между 1 и 50).
// Да се напише програма, която чете времената на състезателите, въведени от 
// потребителя, и пресмята сумарното им време във формат "минути:секунди". 
// Секундите да се изведат с водеща нула (2  "02", 7  "07", 35  "35").
// 
// Примерен вход и изход    вход и изход
//           35    2:04      50     2:29
//           45              50
//           44              49

$firstTime = intval(readline());
$secondTime = intval(readline());
$thirdTime = intval(readline());

$totalTime = $firstTime + $secondTime + $thirdTime;

$minutesToDisplay = floor($totalTime / 60);
//var_dump($minutesToDisplay);
$secondToDisplay = sprintf('%02d', $totalTime % 60);
//var_dump($secondToDisplay);
echo "$minutesToDisplay:$secondToDisplay";