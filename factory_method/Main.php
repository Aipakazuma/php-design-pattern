<?php
require_once 'framework/Factory.php';
require_once 'framework/Product.php';
require_once 'idcard/IDCard.php';
require_once 'idcard/IDCardFactory.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/15
 * Time: 12:50
 */
class Main
{
    public function __construct()
    {
    }

    public function main()
    {
        $factory = new \IdCard\IDCardFactory();
        $card1 = $factory->create('ウィングガンダム');
        $card2 = $factory->create('ガンダムダブルエックス');
        $card3 = $factory->create('ターンAガンダム');
        $card1->myUse();
        $card2->myUse();
        $card3->myUse();
    }
}
