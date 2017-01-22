<?php

namespace Training\Test\Model;
/**
 * Class Product
 * @package Training\FirstModule\Model
 */
class Product
{
    /**
     * @param \Magento\Catalog\Model\Product $product
     * @param $result
     * @return mixed
     */
    public function afterGetPrice(\Magento\Catalog\Model\Product $product, $result)
    {
        return $result * 2;
    }
}