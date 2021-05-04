<?php
$value = trim(fgets(STDIN));

$a = [1, 2, 3, 4];
$start = 0;
$last = count($a) - 1;
$median = ($start + $last) / 2;
$median = ceil($median);

while ($start <= $last) {
    if ($a[$median] === $value) {
        var_dump($median);
        return $median;

    } else {
        if ($value < $median) {
            $last = $median - 1;
            var_dump('$last: ' . $last);

        } else {
            $start = $median + 1;
            var_dump('$start: ' . $start);

        }
    }
    $median = ($start + $last) / 2;
    var_dump('$median: ' . $median);
}
return -1;