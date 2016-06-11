<?php
require_once 'NumberGenerator.php';

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/11
 * Time: 18:19
 */
class RandomNumberGenerator extends NumberGenerator
{
    private $number;

    public function getNumber()
    {
        return $this->number;
    }

    public function execute()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->number = rand(0, 50);
            $this->notifyObservers();
        }
    }
}