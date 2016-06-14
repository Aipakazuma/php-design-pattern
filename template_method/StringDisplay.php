<?php
require_once 'AbstractDisplay.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/14
 * Time: 12:44
 */
class StringDisplay extends AbstractDisplay
{
    private $string;
    private $width;

    public function __construct($string)
    {
        $this->string = $string;
        $this->width = mb_strlen($string, 'UTF-8');
    }

    public function open()
    {
        $this->printLine();
    }

    public function myPrint()
    {
        echo '|'.$this->string.'|'.'<br>';
    }

    public function close()
    {
        $this->printLine();
    }

    private function printLine()
    {
        echo '+';
        for ($i = 0; $i < $this->width; $i++) {
            echo 'ー';
        }
        echo '+'.'<br>';
    }
}