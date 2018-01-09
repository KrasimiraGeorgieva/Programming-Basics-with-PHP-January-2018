<?php

// °F = °C × 1,8 + 32
$celsius = floatval(readline());
$fahrenheit = ($celsius * 1.8) + 32;
print_r($fahrenheit);