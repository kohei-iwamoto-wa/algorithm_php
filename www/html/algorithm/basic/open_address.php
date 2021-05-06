<?php
// オープンアドレス法
$inputValue = (int)trim(fgets(STDIN));

$n = ($inputValue % 10 ) + 1;
$m = $n;
// 配列のキー(入力値)
$flg = 0;
// 配列の要素は10個
$hash = [219, -1, 532, 463, 142, -1, -1, -1, 298, 308];

while ($flg === 0) {
    if ($hash[$m - 1] === $inputValue) {
        $flg = $m;
    } else {
        if ($hash[$m - 1] === -1) {
            $flg = -1;
        } else {
            // ハッシュ値が被った場合、１つプラスする
            $m = $m + 1;
            if ($m === 11) {
                $m = 1;
            }
            if ($m === $n) {
                // 配列に入力値が存在しない
                $flg = -1;
            }
        }
    }
}

print_r($flg);
if ($flg > 0) {
    echo "探索終了：". $flg;
} 

if ($flg <= 0) {
    echo "該当データなし";
}