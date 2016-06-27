<?php
use Framework2\Product;
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/16
 * Time: 12:45
 */
class UnderlinePen implements Product
{
    private $ulChar;

    public function __construct($ulChar)
    {
        $this->ulChar = $ulChar;
    }

    public function myUse($s)
    {
        $length = mb_strlen($s, 'UTF-8');
        echo '"' . $length . '"<br>';
        for ($i = 0; $i < $length; $i++) {
            echo $this->ulChar;
        }
        echo '<br>';
    }

    public function createClone()
    {
        $p = null;
        try {
            $p = clone $this;
        } catch (Exception $e) {
            echo 'Error:' . $e->getMessage() . '<br>';
        }
        return $p;
    }
}