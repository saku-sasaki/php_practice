<?php declare(strict_types=1);
?>
<pre>
<body>
<?php
    abstract class Clock1
    {
        //時間をセットする
        public function setTime(int $time): void
        {
            echo 'ClockクラスのsetTimeメソッドが呼ばれました' . PHP_EOL;
        }
    }

    class DigitalClock extends Clock1
    {
        //時間をセットする（オーバーライド）
        public function setTime(int $time): void
        {
            echo 'DigitalClockクラスのsetTImeメソッドが呼ばれました' . PHP_EOL;
            parent::setTime($time);
        }
    }

    //メインルーチン
    $currentTime = strtotime('2022-07-11 07:30:00');
    $digitalCloak = new DigitalClock;
    $digitalCloak->setTime($currentTime);
?>
</pre>
</body>
