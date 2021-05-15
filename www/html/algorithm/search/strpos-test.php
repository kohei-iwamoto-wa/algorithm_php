<?php
$heystack = "aaabbbccc";
$needle = "aaa";

if (strpos($heystack, $needle) === FALSE) {
    echo "見つかりませんでした。";
} else {
    echo "見つかりました。";
}