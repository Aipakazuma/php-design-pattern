<?php

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/16
 * Time: 12:29
 */
class Singleton
{
    private static $singleton;

    private function __construct()
    {
        echo 'インスタンスを生成しました。';
    }

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$singleton === null) {
            self::$singleton = new self();
        }
        return self::$singleton;
    }
}