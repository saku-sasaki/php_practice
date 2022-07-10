<?php declare(strict_types=1);
?>
<pre>
<body>
<?php
require_once dirname(__FILE__) . '/Canvas.php';
require_once dirname(__FILE__) . '/DigitalClock.php';
require_once dirname(__FILE__) . '/AnalogClock.php';

$canvas = new Canvas();

$currentTime = strtotime('2022-07-10 17:15');
$digitalClock = new DigitalClock();
$digitalClock->setTime($currentTime);
$canvas->drawClock($digitalClock);

$analogClock = new AnalogClock();
$analogClock->setTime($currentTime);
$canvas->drawClock($analogClock);
?>
</pre>
</body>
