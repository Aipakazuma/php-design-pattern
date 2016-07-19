<?php
require_once 'Builder.php';

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/07/06
 * Time: 12:46
 */
class Director
{
    private $builder;

    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    public function initialize()
    {
        $this->builder->makeTitle('Greeting');
        $this->builder->makeString('朝から昼にかけて');
        $this->builder->makeItems([
            'おはようございます',
            'こんにちは'
        ]);
        $this->builder->makeString('夜に');
        $this->builder->makeItems([
            'こんばんは',
            'おやすみなさい。',
            'さようなら。'
        ]);
        $this->builder->close();
    }
}