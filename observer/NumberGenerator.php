<?php

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/11
 * Time: 18:19
 */
abstract class NumberGenerator
{
    private $observers = [];

    public function addObserver($observer)
    {
        $this->observers[] = $observer;
    }

    public function deleteObserver($observer)
    {
        $tmpObservers = $this->observers;
        foreach($tmpObservers as $key => $o) {
            if ($o === $observer) {
                unset($tmpObservers[$key]);
            }
        }
        $this->observers = array_values($tmpObservers);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}