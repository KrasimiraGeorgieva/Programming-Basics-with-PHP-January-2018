<?php

// Напишете програма, която чете цяло число, въведено от потребителя, и 
// отпечатва ден от седмицата (на английски език), в граници [1...7] или 
// отпечатва “Error” в случай, че въведеното число е невалидно.

$dayOfWeek = intval(readline());

switch ($dayOfWeek){
    case 1:echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
       echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Error";
        break;
}