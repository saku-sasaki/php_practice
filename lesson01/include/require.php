<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>require1</title>
</head>
<body>
<?php require_once dirname(__FILE__) . '/files/functions.php'; ?>
    <h3>柳川　鰻太郎算のプロフィールページ</h3>
    <ul>
        <li>氏名：柳川　鰻太郎</li>
        <li>年齢：<?=calcAge(19790401)?>歳</li>
        <li>居住：東京都</li>
    </ul>
</body>
</html>
