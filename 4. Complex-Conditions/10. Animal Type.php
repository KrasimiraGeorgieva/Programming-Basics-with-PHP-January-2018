<?php

// Напишете програма, която отпечатва класа на животното според неговото име, 
// въведено от потребителя.
// • dog -> mammal
// • crocodile, tortoise, snake -> reptile
// • others -> unknown

$animal = readline();

switch ($animal){
    case "dog":
        echo "mammal";
        break;
    case "crocodile": 
    case "tortoise":
    case "snake":echo "reptile";
        break;
    default:
        echo "Unknown";
        break;
}