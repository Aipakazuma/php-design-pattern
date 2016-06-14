<?php
require_once 'AbstractDisplay.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/14
 * Time: 12:43
 */
class CharDisplay extends AbstractDisplay
{
    private $ch;

    public function __construct($ch)
    {
        $this->ch = $ch;
    }

    public function open()
    {
        echo htmlspecialchars('<<');
    }

    public function myPrint()
    {
        echo $this->ch;
    }

    public function close()
    {
        echo htmlspecialchars('>>').'<br>';
    }
}