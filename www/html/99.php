<?php
// 九九表
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        echo $i * $j;
    }
    echo PHP_EOL;
}

echo '<br>';
// 逆
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        echo (10 - $i) * (10 - $j);
    }
    echo PHP_EOL;
}

echo '<br>';

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        echo $i * (10 - $j);
    }
    echo PHP_EOL;
}

echo '<br>';

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        echo (10 - $i) * $j;
    }
    echo PHP_EOL;
}
