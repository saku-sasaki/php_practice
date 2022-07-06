<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach4</title>
</head>
<body>
<?php
//リファレンス渡しによるforeach
    $colors = [
        'red' => '赤',
        'blue' => '青',
        'yellow' => '黄',
    ];
    foreach($colors as $key =>&$value) {
        $value = 'カラー名:' . $value;
    }
    //ループ処理が終わったあとは、必ずunset命令でリファレンスを削除する
    unset($value)
?>
<pre><?php print_r($colors); ?></pre>
</body>
</html>
