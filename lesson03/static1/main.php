<php declare(strict_types=1); ?>
<pre>
<body>
<?php
    require_once dirname(__FILE__) . '/ExcelColumnConverter.php';
    echo ExcelColumnComverter::calcAlphabeCalumnName(3) . PHP_EOL;
    echo ExcelColumnComverter::calcNumberColumnName('F') . PHP_EOL;
?>
</pre>
</body>
