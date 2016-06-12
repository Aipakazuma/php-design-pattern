<?php
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/12
 * Time: 14:03
 */
class Book
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}