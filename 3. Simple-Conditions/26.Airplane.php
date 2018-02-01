<?php
// Programming Basics Online Exam - 7 January 2018

$time = intval(readline());
$minutes = intval(readline());
$timeFlightLenght = intval(readline());

$total = ($time * 60) + $minutes + $timeFlightLenght;

if (floor($total) / 60 >= 24){
    printf("%dh %dm", (floor($total / 60))-24, $total % 60);
} else {
    printf("%dh %dm", (floor($total / 60)), $total % 60);
}

