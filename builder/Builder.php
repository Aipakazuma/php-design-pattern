<?php

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/07/06
 * Time: 12:46
 */
abstract class Builder
{
    abstract public function makeTitle();

    abstract public function makeString();

    abstract public function makeItems();

    abstract public function close();
}