<?php declare(strict_types=1);
?>
<pre>
<body>
<?php
    class SuperClass
    {
        protected $data1;

        public function __construct(string $data1)
        {
            $this->data1 = $data1;
            echo $this->data1;
        }
    }

    class SubClass extends SuperClass
    {
        protected $data2;

        //スーパークラスのコンストラクタよりも引数が１つ多いコンストラクタ
        public function __construct(string $data1, string $data2)
        {
            $this->data1 = $data1;
            $this->data2 = $data2;
            echo $this->data1. $this->data2;
        }
    }

    $subClass = new SubClass('This is data1.', 'This is data2.');

?>
</pre>
</body>
