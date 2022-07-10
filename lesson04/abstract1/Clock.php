<?php
declare(strict_types=1);

abstract class Clock
{
    //現在時刻
    protected $time;

    //時間を示す
    //抽象メソッド：サブクラスで必ず中身の処理を実装する
    abstract public function show(): string;

    //時間をセットする
    public function setTime($time) {
        $this->time = $time;
    }

    //時間を取得する
    public function getTime(): string {
        return $this->time;
    }

}
?>
