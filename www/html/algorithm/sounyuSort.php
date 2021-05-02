<?php
$nums = [6, 4, 7, 5, 3];
function sounyuSort(&$nums) {
    // $nums[0]以降の要素ををループで処理する
    for ($i = 1;$i<=count($nums) - 1;$i++) {
        for ($j = $i; $j >= 1; $j--) {
            if ($nums[$j - 1] > $nums[$j]) {
                $temp = $nums[$j - 1];
                $nums[$j - 1] = $nums[$j];
                $nums[$j] = $temp;
            } else {
                break;
            }
        }
    }
    print_r($nums);
}
sounyuSort($nums);