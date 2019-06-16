<?php

namespace Tests\AppBundle\Entity;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testcomputeTVAProductTypeFood()
    {
        $product = new Product('nom', Product::FOOD_PRODUCT, 10);
        $result = $product->computeTVA();

        $this->assertSame(0.55, $result);
    }
}