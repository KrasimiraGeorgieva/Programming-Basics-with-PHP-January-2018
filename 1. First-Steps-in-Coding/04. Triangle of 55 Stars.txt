<?php

$stars = str_repeat("*", 1);

for($i = 0; $i < 10; $i++) {
    echo $stars;
    echo "\n";
    $stars = $stars . "*"; 
}