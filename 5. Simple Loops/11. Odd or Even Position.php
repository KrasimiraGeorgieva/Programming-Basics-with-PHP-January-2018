<?php 

$count = floatval(readline());

    $oddMax = PHP_INT_MIN;
    $oddMin = PHP_INT_MAX;
    $evenSum = null;
    $evenMin = PHP_INT_MAX;
    $evenMax = PHP_INT_MIN;
    $oddSum = null;

    for ($i = 1; $i <= $count; $i++){
        $number = floatval(readline());

        if (!($i % 2 === 0)){
            $oddSum += $number;
            if ($number >= $oddMax){
                $oddMax = $number;
            }
            if ($number <= $oddMin){
                $oddMin = $number;
            }
        }elseif ($i % 2 == 0){
            $evenSum += $number;
            if ($number >= $evenMax){
                $evenMax = $number;
            }
            if ($number <= $evenMin){
                $evenMin = $number;
            }
        }
    }
    if ($count == 1){
        echo "OddSum = $oddSum\n";
        echo "OddMin = $oddMin\n";
        echo "OddMax = $oddMax\n";
        echo "EvenSum = 0\n";
        echo "EvenMin = No\n";
        echo "EvenMax = No\n";
    } elseif ($count == 0){
        echo "OddSum = 0\n";
        echo "OddMin = No\n";
        echo "OddMax = No\n";
        echo "EvenSum = 0\n";
        echo "EvenMin = No\n";
        echo "EvenMax = No\n";
    } else {
        echo "OddSum = $oddSum\n";
        echo "OddMin = $oddMin\n";
        echo "OddMax = $oddMax\n";
        echo "EvenSum = $evenSum\n";
        echo "EvenMin = $evenMin\n";
        echo "EvenMax = $evenMax\n";
    }