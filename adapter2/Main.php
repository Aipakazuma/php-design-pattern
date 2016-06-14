<?php
require_once 'PrintBanner.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/13
 * Time: 9:21
 */
class Main
{
    public function __construct()
    {
    }

    public function main()
    {
        $p = new PrintBanner('Hello');
        $p->printWeak();
        $p->printStrong();
    }
}
