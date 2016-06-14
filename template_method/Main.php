<?php
require_once 'AbstractDisplay.php';
require_once 'CharDisplay.php';
require_once 'StringDisplay.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/14
 * Time: 12:53
 */
class Main
{
    public function __construct()
    {
    }

    /**
     * @return void
     */
    public function main()
    {
        $d1 = new CharDisplay('H');
        $d2 = new StringDisplay('Hello, world.');
        $d3 = new StringDisplay('こんにちは。');
        $d1->display();
        $d2->display();
        $d3->display();
    }
}
