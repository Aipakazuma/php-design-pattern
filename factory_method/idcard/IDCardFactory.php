<?php
namespace IdCard;

use Framework\Factory;
use Framework\Product;

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/15
 * Time: 12:35
 */
class IDCardFactory extends Factory
{
    private $owners = [];

    public function createProduct($owner)
    {
        return new IDCard($owner);
    }

    public function registerProduct(Product $product)
    {
        $this->owners[] = $product->getOwner();
    }

    public function getOwners()
    {
        return $this->owners;
    }
}