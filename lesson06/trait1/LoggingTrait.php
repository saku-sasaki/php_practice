<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/Logger.php';

//ログ出力の初期化処理をするためのトレイト
trait LoggingTrait
{
    //Loggerインスタンス
    private $logger;

    //ログファイル名
    private $logFileName;


    //Loggerインスタンスをロードする
    private function loadLogger(): void
    {
        if($this->logFileName === null) {
            //__CLASS__はPHPにあらかじめ定義されている、クラス名を表す定数
            $this->logFileName = __CLASS__ . '.log';
        }
        $this->logger = new Logger($this->logFileName);
        $this->logger->clear(); //動作確認のために実行のためにログファイルを初期化する
    }

    //ログ出力するメソッド
    private function log(string $data): void
    {
        if($this->logger === null) {
            $this->loadLogger();
        }

        $data = date('Y-m-d H:i:s') . '' . $data; //出力データの冒頭に現在時刻をつける
        $this->logger->write($data);
    }
}
