<?php

// Да се напише програма, която чете цяло число в диапазона [0…9], 
// въведено от потребителя, и го изписва с думи на английски език. 
// Ако числото е извън диапазона, изписва “number too big”.

$num = intval(readline());
//var_dump($num);
if ($num === 0) {
    echo 'zero';
} 
elseif ($num === 1) {
    echo 'one';
} 
elseif ($num === 2) {
    echo 'two';
} 
elseif ($num === 3) {
    echo 'three';
} 
elseif ($num === 4) {
    echo 'four';
} 
elseif ($num === 5) {
    echo 'five';
} 
elseif ($num === 6) {
    echo 'six';
} 
elseif ($num === 7) {
    echo'seven';
} 
elseif ($num === 8) {
    echo 'eight';
} 
elseif ($num === 9) {
    echo 'nine';
} 
else {
    echo 'number too big';
}