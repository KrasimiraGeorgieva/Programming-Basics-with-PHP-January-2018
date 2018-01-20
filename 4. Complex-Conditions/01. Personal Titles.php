<?php

$age = floatval(readline());
$gender = readline();

if ($gender == "m"){
    if ($age >= 16)
        echo "Mr.";
    else
        echo "Master";
} elseif ($gender == "f"){
    if ($age >= 16)
        echo "Ms.";
    else
       echo "Miss";
}