<?php
require_once 'RandomNumberGenerator.php';
require_once 'DigitObserver.php';
require_once 'GraphObserver.php';

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/11
 * Time: 18:19
 */
class Main
{
    public function main()
    {
        $generator = new RandomNumberGenerator();
        $observer1 = new DigitObserver();
        $observer2 = new GraphObserver();
        $generator->addObserver($observer1);
        $generator->addObserver($observer2);
        $generator->execute();
    }
}