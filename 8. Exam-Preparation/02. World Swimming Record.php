<?php

// Втора задача от изпит "Програмиране за начинаещи" - 25 юни 2017

$recordInSeconds = floatval(readline());
$distanceInMeters = floatval(readline());
$timeInSeconds = floatval(readline());

$timeSwimming = $distanceInMeters * $timeInSeconds + floor($distanceInMeters / 15) * 12.5;

if ($recordInSeconds <= $timeSwimming) {
    $result = $timeSwimming - $recordInSeconds;
    printf("No, he failed! He was %.2f seconds slower.", $result);
    echo "\n";
} elseif ($recordInSeconds > $timeSwimming) {
    printf("Yes, he succeeded! The new world record is %.2f seconds.", $timeSwimming);
    echo "\n";
}