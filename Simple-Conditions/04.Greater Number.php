<?php
// Да се напише програма, която чете две цели числа, въведени от потребителя
//  и отпечатва по-голямото от двете.
// Примерен вход и изход       вход и изход
//           5      5           -5      5
//           3                   5

echo "Enter two integers:" . "\n";
        $num1 = intval(readline());
        $num2 = intval(readline());

        if ($num1 > $num2){
            echo "Greater number: " . $num1;
        }
        else{
            echo "Greater number: " . $num2;
        }