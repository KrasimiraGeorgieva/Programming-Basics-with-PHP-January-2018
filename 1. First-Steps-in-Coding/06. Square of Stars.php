<?php

$a = readline();

echo str_repeat("*", $a);
echo "\n";

for($i = 0; $i< $a-2; $i++){
    echo ("*" . str_repeat(" ", $a-2) . "*") . "\n";
}

echo str_repeat("*", $a);