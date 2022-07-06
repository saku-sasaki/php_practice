<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach3</title>
</head>
<body>
<?php
//リファレンス渡しによるforeach
    $numbers = [3, 5, -1, 2];
    foreach($numbers as &$number) {
        if($number < 0) {
            $number = 0;
        }
    }
    //ループ処理が終わったあとは、必ずunset命令でリファレンスを削除する
    unset($number)
?>
<pre><?php print_r($numbers); ?></pre>
</body>
</html>
