<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample01</title>
</head>
<body>
    <?php
        $airports = ['Haneda', 'Narita', 'Chubu',];
        $airports[] = 'kansai';
        $airports[] = 'Naha';
    ?>
    <p><?=$airports[0]?></p>
    <p><?=$airports[1]?></p>
    <p><?=$airports[2]?></p>
    <p><?=$airports[3]?></p>
    <p><?=$airports[4]?></p>

    <p><pre><?php print_r($airports);?></pre></p>

</body>
</html>
