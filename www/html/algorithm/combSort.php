<?php
// コムソート
function comb_sort(&$arr) {
    $gap = $size = count($arr);
    $swap = true;
    while ($gap > 1 || $swap) {
        if ($gap > 1) {
            // 1.25でわる理由？？
            $gap = floor($gap / 1.25);
            if ($gap == 9 || $gap == 10) $gap = 11;
        }
        $swap = false;
        $i = 0;
        while ($i + $gap < $size) {
            if ($arr[$i] > $arr[$i + $gap]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$i + $gap];
                $arr[$i + $gap] = $tmp;
                $swap = true;
            }
            $i++;
        }
    }
}
$arr = [10, 100, 30, 90, 40];
comb_sort($arr);
echo implode(', ', $arr)."\n";
