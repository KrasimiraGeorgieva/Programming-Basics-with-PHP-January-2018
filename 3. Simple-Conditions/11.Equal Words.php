<?php

// Да се напише програма, която чете две думи, въведени от потребителя и 
// проверява дали са еднакви. Да не се прави разлика между главни и малки думи.
// Да се изведе “yes” или “no”.

// Примерен вход    изход      вход    изход        вход    изход
//          Hello   yes        HeLlO   yes          Soft    no
//          Hello              hELLo                Uni

$firstWord = strtolower(readline());
$secondWord = strtolower(readline());

if ($firstWord === $secondWord){
    echo "yes";
}
elseif ($firstWord !== $secondWord){
    echo "no";
}