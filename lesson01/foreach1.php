<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach1</title>
</head>
<body>
<?php
    $colors = ['赤','青','黄'];
    foreach ($colors as $color) {
        echo "<p>{$color}</p>";
    }
?>
</body>
</html>
