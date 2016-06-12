<?php
namespace My;
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/12
 * Time: 14:04
 */
interface Iterator
{
    public function hasNext();

    public function next();
}