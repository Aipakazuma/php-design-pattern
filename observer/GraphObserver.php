<?php
require_once 'Observer.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/11
 * Time: 18:19
 */
class GraphObserver implements Observer
{
    public function update($generator)
    {
        echo 'GraphObserver:';
        $count = $generator->getNumber();
        for ($i = 0; $i < $count; $i++) {
            echo '*';
        }
        echo '<br>';
        try {
            usleep(100);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}