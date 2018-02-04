<?php

$n = intval(readline());
$stars = 1;
if ($n % 2 == 0) {
    $stars = 2;
}
for ($row = 0; $row < floor(($n + 1) / 2); $row++) {
    $dashes = ($n - $stars) / 2;
    echo(str_repeat('-', $dashes));
    echo(str_repeat('*', $stars));
    echo(str_repeat('-', $dashes));
    echo "\n";
    $stars = $stars + 2;
}
$bodyHouse = $n - floor(($n + 1) / 2);
for ($row = 0; $row < $bodyHouse; $row++) {
    echo("|");
    echo(str_repeat('*', $n - 2));
    echo "|\n";

}