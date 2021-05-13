<?php
echo "距離を入力してください。";
$inputValue = (int)trim(fgets(STDIN));

$D = [10, 20, 40, 80, 160, 99999999];
$P = [150, 30, 20, 15, 10];
$ryokin = $P[0];

if ($inputValue > $D[0]) {
    $i = 1;
    while ($inputValue > $D[$i]) {
        $ryokin = $ryokin + ($D[$i] - $D[$i - 1]) * $P[$i];
        $i++;
    }
    if ($i <= 6) {
        $ryokin = $ryokin + ($inputValue - $D[$i - 1]) * $P[$i];
        echo $ryokin;

    } else {
        echo "距離入力エラー";

    }
}
