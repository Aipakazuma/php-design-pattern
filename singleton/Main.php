<?php
require_once 'Singleton.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/16
 * Time: 12:30
 */
class Main
{
    public function __construct()
    {
    }

    public function main()
    {
        echo 'Start'.'<br>';
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();
        if ($obj1 === $obj2) {
            echo 'obj1とobj2は同じインスタンスです'.'<br>';
        } else {
            echo 'obj1とobj2は同じインスタンスではありません'.'<br>';
        }
        echo 'End.'.'<br>';
    }
}