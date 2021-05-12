<?php
$average = 0;
$score = [10, 20, 30, 90];
$sum = 0;
for ($i = 0;$i <= count($score) - 1; $i++) {
    $sum = $sum + $score[$i];
}

$average = $sum / $i;
echo $average;
