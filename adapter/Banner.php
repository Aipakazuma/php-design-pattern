<?php

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/13
 * Time: 9:15
 */
class Banner
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function showWithParen()
    {
        echo "<u>$this->string</u><br>";
    }

    public function showWithAster()
    {
        echo "<strong>$this->string</strong><br>";
    }
}