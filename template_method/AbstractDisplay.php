<?php

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/14
 * Time: 12:43
 */
abstract class AbstractDisplay
{
    public abstract function open();

    public abstract function myPrint();

    public abstract function close();

    public final function display()
    {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->myPrint();
        }
        $this->close();
    }
}