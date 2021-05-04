<?php
$inputValue = trim(fgets(STDIN));

$a = [1, 2, 3, 4, 6];
$start = 0;
$last = count($a) - 1;
$median = ($start + $last) / 2;
$median = $median;

while ($start <= $last) {
    if ($a[$median] === $inputValue) {
        var_dump(floor($median));
        return floor($median);

    } else {
        if ($inputValue < $median) {
            $last = $median - 1;
            var_dump('$last: ' . $last);

        } else {
            $start = $median + 1;
            var_dump('$start: ' . $start);

        }
    }
    $median = ($start + $last) / 2;
    $median = floor($median);
    var_dump('$median: ' . $median);
}
return -1;