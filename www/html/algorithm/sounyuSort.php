<?php
$nums = [6, 4, 7, 5, 3];
function sounyuSort(&$nums) {
    // $nums[0]以降の要素ををループで処理する
    for ($i = 1;$i<=count($nums) - 1;$i++) {
        for ($j = $i; $j >= 1; $j--) {
            // 現在の要素より直前の要素が大きい場合
            if ($nums[$j - 1] > $nums[$j]) {
                // 一次変数に対比
                $temp = $nums[$j - 1];
                // 値をスライド
                $nums[$j - 1] = $nums[$j];
                // 一次変数に格納した値をスライド
                $nums[$j] = $temp;
            } else {
                break;
            }
        }
    }
    print_r($nums);
}
sounyuSort($nums);