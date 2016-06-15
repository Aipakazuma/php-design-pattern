<?php
namespace Framework;
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/15
 * Time: 12:34
 */
abstract class Factory
{
    public final function create($owner)
    {
        $p = $this->createProduct($owner);
        $this->registerProduct($p);
        return $p;
    }

    public abstract function createProduct($owner);

    public abstract function registerProduct(Product $product);
}