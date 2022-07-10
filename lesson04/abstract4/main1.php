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
        //何も記述しない
    }

    $subClass = new SubClass('This is data1.');

?>
</pre>
</body>
