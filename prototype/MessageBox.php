<?php
use Framework2\Product;

require_once 'framework/Product.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/16
 * Time: 12:45
 */
class MessageBox implements Product
{
    private $decochar;

    public function __construct($decochar)
    {
        $this->decochar = $decochar;
    }

    public function myUse($s)
    {
        $length = mb_strlen($s, 'UTF-8');
        echo '<p>';
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
        }
        echo '</p><p>';
        echo $this->decochar . ' ' . $s . ' ' . $this->decochar;
        echo '</p><p>';
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
        }
        echo '</p>';
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