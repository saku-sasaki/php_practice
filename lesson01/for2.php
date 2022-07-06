<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop2</title>
</head>
<body>
<pre>
<?php
    $lines = [
        'いろはにほへと',
        'ちりぬるを',
        'わかよたれそ',
        ];
    for($linenumber = 1; $linenumber <= count($lines); $linenumber++) {
        echo $linenumber. '行目:' . $lines[$linenumber -1 ] . PHP_EOL;
    }
?>
</pre>
</body>
</html>
