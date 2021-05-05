<?php
$hash = [];
while (true) {
    echo "3桁の半角数字を入力してください。" . PHP_EOL;
    echo "登録されている値を一覧する場合は、「show」と入力してください。" . PHP_EOL;
    echo "登録を終了する場合は、「end」と入力してください。" . PHP_EOL;
    $inputValue = trim(fgets(STDIN));

    if ($inputValue === 'show') {
        $hashCount = count($hash);
        if ($hashCount === 0) {
            echo "登録されている値はありません。";
            break;
        }
        foreach ($hash as $value) {
            echo $value . PHP_EOL;
        }
    }

    if ($inputValue === 'end') {
        echo "登録を終了します";
        break;
    }

    if (!preg_match('/[0-9]{3}/', $inputValue)) {
        echo "3桁の半角数字を入力してください。" . PHP_EOL;
        continue;
    }

    $n = ($inputValue % 10) + 1;
    $hash[$n] = $inputValue;
}
