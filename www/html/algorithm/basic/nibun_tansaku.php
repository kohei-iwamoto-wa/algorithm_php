<?php
$inputValue = (int)trim(fgets(STDIN));

$a = [1, 2, 3, 4, 6, 10];
$start = 0;
$last = count($a) - 1;
$median = ($start + $last) / 2;
$median = floor($median);

while ($start <= $last) {
    if ($a[$median] === $inputValue) {
        var_dump($median);
        return $median;

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
print_r(-1);
return -1;