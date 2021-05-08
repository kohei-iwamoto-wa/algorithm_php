<?php
$ans = saiki(5);
echo $ans;
function saiki($n) {
    if ($n > 1) {
        return ($n * saiki($n - 1));
    }
    return 1;
}