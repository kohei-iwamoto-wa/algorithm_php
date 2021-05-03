<?php
$a = [50, 10, 90, 40];
$max = $a[0];

for ($i = 1; $i < count($a); $i++) {
    if ($a[$i] > $max) {
        $max = $a[$i];
    }
}

print_r($max);
