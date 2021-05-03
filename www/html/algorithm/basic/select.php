<?php
// 変数aと変数bの内容を入れ替える
$a = 10;
$b = 20;
$tmp = $a;
$a = $b;
$b = $tmp;

print_r('$a :'. $a . "\n");
print_r('$b :'. $b . "\n");
