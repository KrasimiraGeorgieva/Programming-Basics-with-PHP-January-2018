<?php
$n = intval(readline());
for ($row = 0; $row < $n; $row++) {
    if ($row == 0 || $row == $n - 1) {
        echo(str_repeat('*', 2 * $n));
        echo(str_repeat(' ', $n));
        echo(str_repeat('*', 2 * $n));
    } else {
        echo("*");
        echo(str_repeat('/', 2 * $n - 2));
        echo("*");
        if ($row == floor(($n - 1) / 2))
            echo(str_repeat('|', $n));
        else
            echo(str_repeat(' ', $n));
        echo("*");
        echo(str_repeat('/', 2 * $n - 2));
        echo("*");
    }
    echo "\n";
}