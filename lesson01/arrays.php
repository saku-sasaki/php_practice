<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//     /*配列を合成します*/
//     $arr1 = ['a', 'b'];
//     $arr2 = ['d', 'e', 'f'];
//     $mergedA = $arr1 + $arr2;
//     $mergedB = $arr2 + $arr1;
//     $mergedC = array_merge($arr1,$arr2);
//     $mergedD = array_merge($arr2,$arr1);
// ?>

<!-- // <p>●配列の合成結果：</p>
// *mergedA: <?php print_r($mergedA) ?>
// *mergedB: <?php print_r($mergedB) ?>
// *mergedC: <?php print_r($mergedC) ?>
// *mergedD: <?php print_r($mergedD) ?> -->

<?php
/*連想配列を合成します*/
$arr3 = [
    'a' => 'valueA' ,
    'b' => 'valueB' ,
    ];

$arr4 = [
    'a' => 'valueC',
    'b' => 'valueD',
    'c' => 'valueE',
    ];
    $mergedE = $arr3 + $arr4;
    $mergedF = $arr4 + $arr3;
    $mergedG = array_merge($arr3,$arr4);
    $mergedH = array_merge($arr4,$arr3);
?>

<p>●連想配列の合成結果</p>
* merged E:<?php print_r($mergedE)?>
* merged F:<?php print_r($mergedF)?>
* merged G:<?php print_r($mergedG)?>
* merged E:<?php print_r($mergedH)?>
</body>
</html>
