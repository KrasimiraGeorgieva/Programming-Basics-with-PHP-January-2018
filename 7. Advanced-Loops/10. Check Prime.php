<?php

$n = intval(readline());
$prime = ($n > 1);
for ($i = 2; $i <= sqrt($n); $i++) {
    if ($n % $i == 0) {
        $prime = false;
        break;
    }
}
if ($prime) {
    echo "Prime";
} else {
    echo "Not prime";
}