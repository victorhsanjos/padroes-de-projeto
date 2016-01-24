<?php

namespace Victorhsanjos\PadroesDeProjeto\Test\FactoryMethod;

use Victorhsanjos\PadroesDeProjeto\FactoryMethod\TextProduct;

class TextProductTest extends \PHPUnit_Framework_TestCase
{
    public function testOMetodoGetProperties()
    {
        $textProduct = new TextProduct();

        $this->assertEquals('this is a text.', $textProduct->getProperties());
    }
}
