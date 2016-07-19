<?php

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/07/06
 * Time: 12:46
 */
abstract class Builder
{
    abstract public function makeTitle($title);

    abstract public function makeString($str);

    abstract public function makeItems($items);

    abstract public function close();
}