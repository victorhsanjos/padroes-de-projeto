<?php

namespace Victorhsanjos\PadroesDeProjeto\Test\FactoryMethod;

use Victorhsanjos\PadroesDeProjeto\FactoryMethod\GraphicProduct;

class GraphicProductTest extends \PHPUnit_Framework_TestCase
{
    public function testOMetodoGetProperties()
    {
        $graphicProduct = new GraphicProduct();

        $this->assertEquals('this is a graphic.<3', $graphicProduct->getProperties());
    }
}
