<?php
require_once 'Observer.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/11
 * Time: 18:19
 */
class DigitObserver implements Observer
{
    public function update($generator)
    {
        echo 'DigitObserver: ' . $generator->getNumber() . '<br>';
        try {
            usleep(100);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}