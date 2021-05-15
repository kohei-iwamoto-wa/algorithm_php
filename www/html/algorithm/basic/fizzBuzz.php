<?php
$val = 300;

for ($i = 0; $i <= $val; $i++) {
    if ($i % 3 === 0) {
        echo $i . ": Fizz" . PHP_EOL;
    }

    if ($i % 5 === 0) {
        echo $i . ": Buzz" . PHP_EOL;
    }
}
