<?php
$a = [50, 10, 90, 40];
$min = $a[0];

for ($i = 1; $i < count($a); $i++) {
    if ($a[$i] < $min) {
        $min = $a[$i];
    }
} 
print_r($min);
