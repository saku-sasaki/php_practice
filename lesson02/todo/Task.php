<?php
declare(strict_types=1);

class Task
{
    //優先度を表す定数
    public const PRIORITY_LOW = 0;
    public const PRIORITY_MIDDLE = 1;
    public const PRIORITY_HIGH = 2;

    //タスク名
    public string $name;

    //優先度
    public int $priority;

    //進行度(0〜100で表す)
    public int $progress;

    //優先度を低〜高の文字列で取得する
    public function getPriorityAsString() : string
    {
        switch($this->priority) {
            case self::PRIORITY_LOW :
                return '低';
                break;
            case self::PRIORITY_MIDDLE :
                return '中';
                break;
            case self::PRIORITY_HIGH :
                return '高';
                break;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getProgress():int
    {
        return $this->progress;
    }

    public function setProgress(int $progress)
    {
        if($progress < 0) {
            $progress = 0;
        } elseif ($progress > 100) {
            $progress = 100;
        }
        $this->progress = $progress;
    }

    //タスクを完了ステータスにする
    public function completeProgress():void
    {
        $this->progress = 100;
    }

    public function clearProgress():void
    {
        $this->progress = 0;
    }
}
