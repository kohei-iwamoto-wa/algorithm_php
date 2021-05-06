<?php
// チェイン法
$inputValue = (int)trim(fgets(STDIN));
$n = ($inputValue % 5);
$flg = 0;
$hash = [110, 111, 112, 113, 114, 120, 130];
$poin = [6, 0, 0 , 0, 0, 7, 0];

do  {
    if ($hash[$n] === $inputValue) {
        $flg = $n;
        print_r($flg);
    } else {
        var_dump($n);
        $n = $poin[$n];
    }
    var_dump('$n: '.$n);
    var_dump('$flg: '.$flg);
} while ($n !== 0 && $flg === 0);

if ($flg > 0) {
    echo "探索成功: " . $flg;
} else {
    echo "該当データなし";
}
