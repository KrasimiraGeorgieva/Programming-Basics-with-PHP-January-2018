<?php
echo "Еnter a number in the range [1...100]: ";
$num = intval(readline());
while ($num < 1 || $num > 100) {
    echo "Invalid number!" . "\n";
    echo "Еnter a number in the range [1...100]: ";
    $num = intval(readline());
}

echo "The number is: $num";