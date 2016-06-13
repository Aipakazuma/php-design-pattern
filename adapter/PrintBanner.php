<?php
require_once 'Banner.php';
require_once 'MyPrint.php';

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/13
 * Time: 9:14
 */
class PrintBanner extends Banner implements MyPrint
{
    public function __construct($string)
    {
        parent::__construct($string);
    }

    public function printWeak()
    {
        $this->showWithParen();
    }

    public function printStrong()
    {
        $this->showWithAster();
    }
}