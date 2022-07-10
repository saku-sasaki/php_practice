<pre>
<body>
<?php
    require_once dirname(__FILE__) . '/ShoppingPoint.php';

    //曜日ポイントクラス
    class weekDayPoint
    {
        //今日が金曜日なら１ポイント加算するメソッド
        public function addWeekDaypoint(string $youbi)
        {
            if($youbi === 'fri') {
                ShoppingPoint::countAppPoint();
            }
        }
    }
        //1000円以上の購入金額の時に、１ポイント加算する関数
        function addPricePoint(int $price)
        {
            if($price >= 1000) {
                ShoppingPoint::countAppPoint();
            }
        }

        /**
         * メインルーチン
         */
        //初期ポイントは０とする
        ShoppingPoint::$point = 0;

        //購入しただけで無条件に１ポイント加算する（結果、トータルポイント１になる）
        shoppingPoint::countAppPoint();

        //曜日によって１ポイント加算する
        $weekDayPoint = new WeekDayPoint();
        $weekDayPoint->addWeekDaypoint('fri');

        //購入金額によって１ポイント加算する（結果、トータルポイント３になる）
        addPricePoint(5000);

        echo '購入ポイント：' . ShoppingPoint::$point;
?>
</pre>
</body>
