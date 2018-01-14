<?php

// Да се напише програма, която чете парола (един ред с произволен текст),
// въведена от потребителя, и проверява дали въведеното съвпада с фразата 
// “s3cr3t!P@ssw0rd”. При съвпадение да се изведе “Welcome”. При несъвпадение
// да се изведе “Wrong password!”.

// Примерен вход                изход
//          qwerty              Wrong password!
//          s3cr3t!P@ssw0rd	Welcome
//          s3cr3t!p@ss	        Wrong password!

$password = readline();

if ($password == "s3cr3t!P@ssw0rd"){
    echo "Welcome";
}else{
    echo "Wrong password!";
}