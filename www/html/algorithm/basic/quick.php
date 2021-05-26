<?php
$arr = [3, 2, 0, 5, 8, 3, 4, 1, 3, 2];

function quickSort($arr, $min, $max, $j)
{
    findPivot($arr, $min, $max, $j);
    if ($j > -1) {
        $pivot = $arr[$j];
        arrange($arr, $min, $max, $pivot, $k);
        $left = $k - 1;
        quickSort();
        quickSort();
    }
}

function findPivot()
{
    $pivot = $arr[$min];
    $k = $min + 1;
    $ret = -1;
    $found = false;

    while ($k <= $max && $found === true) {
        if ($arr[$k] === $pivot) {
            $k = $k + 1;
        } else {
            $found = true;
            if ($arr[$k] > $pivot) {
                // c
            } else {
                // d
            }
        }
    }
}

function arrange($arr, $min, $max, $pivot, $ret) 
{
    $left = $min;
    $right = $max;
    $tmp;

    while ($left <= $right) {
        $tmp = $arr[$left];
        $arr[$left] = $arr[$eight];
        $arr[$right] = $tmp;

        while ($arr[$left] < $pivot) {
            $left = $left + 1;
        }
        while ($arr[$right] >= $pivot) {
            $right = $right - 1;
        }
    }
    $ret = $left;
}