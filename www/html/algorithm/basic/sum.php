<?php
$sum = 0;
$number = 0;

do {
$number = $number + 1;
$sum = $sum + $number;
echo $sum . PHP_EOL;
} while ($number < 10);
