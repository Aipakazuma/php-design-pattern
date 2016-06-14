<?php
require_once 'Banner.php';
require_once 'MyPrint.php';

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/13
 * Time: 9:14
 */
class PrintBanner extends MyPrint
{
    private $banner;

    public function __construct($string)
    {
        $this->banner = new Banner($string);
    }

    public function printWeak()
    {
        $this->banner->showWithParen();
    }

    public function printStrong()
    {
        $this->banner->showWithAster();
    }
}