<?php
namespace Framework2;
require_once 'Product.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/16
 * Time: 12:44
 */
class Manager
{
    private $showcase = [];

    public function register($name, Product $proto)
    {
        $this->showcase[$name] = $proto;
    }

    public function create($protoName)
    {
        $p = $this->showcase[$protoName];
        return $p->createClone();
    }
}