<?php
use Framework2\Manager;

require_once 'MessageBox.php';
require_once 'UnderlinePen.php';
require_once 'framework/Manager.php';
require_once 'framework/Product.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/27
 * Time: 12:29
 */
class Main
{
    public function __construct()
    {
    }

    public function main()
    {
        $manager = new Manager();
        $upen = new UnderlinePen('~');
        $mbox = new MessageBox('*');
        $sbox = new MessageBox('/');
        $manager->register('strong message', $upen);
        $manager->register('warning box', $mbox);
        $manager->register('slash box', $sbox);

        // 生成
        $p1 = $manager->create('strong message');
        $p1->myUse('Hello, world.');
        $p2 = $manager->create('warning box');
        $p2->myUse('Hello, world.');
        $p3 = $manager->create('slash box');
        $p3->myUse('Hello, world.');
    }
}
