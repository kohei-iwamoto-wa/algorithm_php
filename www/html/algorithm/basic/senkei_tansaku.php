<?php
// 線型探索で
$a = ['a', 'b', 'c', 'f', 'k', 'x', 'h'];
for ($i = 0; $i <= count($a) - 1; $i++) {
    if ($a[$i] === 'x') {
        return $i;
    }
}
return -1;
