<?php
require_once 'TextBuilder.php';
require_once 'HTMLBuilder.php';
require_once 'Director.php';

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/07/06
 * Time: 12:55
 */
class Main
{
    public function __construct()
    {
    }

    public function main($type = null)
    {
        if (empty($type)) {
            $this->usage();
            exit();
        }

        if ($type === 'plan') {
            $textBuilder = new TextBuilder();
            $director = new Director($textBuilder);
            $director->initialize();
            $result = $textBuilder->getResult();
            echo $result;
        } else if ($type === 'html') {
            $htmlBuilder = new HTMLBuilder();
            $director = new Director($htmlBuilder);
            $director->initialize();
            $fileName = $htmlBuilder->getResult();
            echo $fileName . 'が作成されました。';
        } else {
            $this->usage();
            exit();
        }
    }

    public function usage()
    {
        echo 'Usage: ?type=plan     プレーンテキストで文章作成';
        echo 'Usage: ?type=html     Htmlファイルで文章作成';
    }
}
