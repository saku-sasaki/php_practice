<?php declare(strict_types=1);?>
<pre>
<body>
<?php
    require_once dirname(__FILE__) . '/DigitalClock.php';
    $currentTime = strtotime('2022-07-10 17:15');
    $digitalClock = new DigitalClock();
    $digitalClock->settime($currentTime);
    echo $digitalClock->show();
?>
</pre>
</body>
