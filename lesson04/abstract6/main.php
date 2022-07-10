<?php declare(strict_types=1); ?>
<pre>
<body>
<?php
    abstract class Clock2
    {
        private $time;

        //コンストラクタ
        public function __construct(int $time)
        {
            echo 'Clockクラスのコンストラクタが呼ばれました'. PHP_EOL;
            $this->time = $time;
        }
    }

    class DigitalClock extends Clock2
    {
        private $color;

        public function __construct(int $time, string $color)
        {
            echo 'DigitalClockのコンストラクタが呼ばれました' . PHP_EOL;
            $this->color = $color;
            parent::__construct($time);
        }
    }

    //メインルーチン
    $currentTime = strtotime('2022-07-11 08:00:00');
    $digitalClock = new DigitalClock($currentTime, 'yellow');

?>
</pre>
</body>
