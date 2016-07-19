<?php
require_once 'Builder.php';

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/07/06
 * Time: 12:46
 */
class TextBuilder extends Builder
{
    private $buffer = [];

    public function makeTitle($title)
    {
        $this->buffer[] = '============================<br>';
        $this->buffer[] = '「' . $title . '」<br>';
        $this->buffer[] = '<br>';
    }

    public function makeString($str)
    {
        $this->buffer[] = '■' . $str . '<br>';
        $this->buffer[] = '<br>';
    }

    public function makeItems($items)
    {
        foreach($items as $item) {
            $this->buffer[] = ' ・' . $item . '<br>';
        }
        $this->buffer[] = '<br>';
    }

    public function close()
    {
        $this->buffer[] = '============================<br>';
    }

    public function getResult()
    {
        return implode('', $this->buffer);
    }
}