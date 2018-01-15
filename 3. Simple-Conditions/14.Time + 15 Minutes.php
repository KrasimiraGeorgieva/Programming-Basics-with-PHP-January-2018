<?php

// Да се напише програма, която чете час и минути от 24-часово денонощие, 
// въведени от потребителя, и изчислява колко ще е часът след 15 минути. 
// Резултатът да се отпечата във формат hh:mm. Часовете винаги са между 0 и 23,
// а минутите винаги са между 0 и 59. Часовете се изписват с една или две цифри.
// Минутите се изписват винаги с по две цифри, с водеща нула когато е необходимо.

// Примерен вход изход вход изход вход изход вход изход вход изход
//          1    2:01  0    0:16  23   0:14  11   11:23 12   13:04
//          46         01         59         08         49


$hours = intval(readline());
$minutes = intval(readline());

$extraMins = $minutes + 15;
$resultHours = $hours + ($extraMins / 60);
//var_dump($resultHours);
$resultMinutes = sprintf('%02d',$extraMins % 60);

if ($resultHours >= 24) {
    echo '0'.":$resultMinutes";
}
else {
    $minutes = sprintf('%02d',$resultMinutes);
    $hours = floor($resultHours);
    echo "$hours:$minutes";
}