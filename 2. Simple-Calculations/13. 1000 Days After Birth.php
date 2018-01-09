<?php

$inputDate = readline();

$date = new DateTime($inputDate);
$date->modify('+999 days');

echo $date->format('d-m-Y');