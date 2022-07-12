<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/Flyable.php';
//歩けるものインターフェース
class Sky
{
    //歩くアニメーションをするメソッド
    public function draw(Flyable $flyable) : void
    {
        $flyable->fly();
    }
}
