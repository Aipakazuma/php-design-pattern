<?php
namespace IdCard;
use Framework\Product;

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/15
 * Time: 12:35
 */
class IDCard extends Product
{
    private $owner;

    public function __construct($owner)
    {
        echo $owner . 'のカードを作ります。'.'<br>';
        $this->owner = $owner;
    }

    public function myUse()
    {
        echo $this->owner . 'のカードを使います。'.'<br>';
    }

    public function getOwner()
    {
        return $this->owner;
    }

}