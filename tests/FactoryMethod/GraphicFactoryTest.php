<?php

namespace Victorhsanjos\PadroesDeProjeto\Test;

use Victorhsanjos\PadroesDeProjeto\FactoryMethod\GraphicFactory;

class GraphicFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testSeOMetodoFactoryMethodFoiImplementado()
    {
        $this->assertTrue(method_exists(GraphicFactory::class, 'factoryMethod'));
    }

    public function testOMetodoStartFactory()
    {
        $graphicFactory = new GraphicFactory();

        $this->assertEquals('this is a graphic.<3', $graphicFactory->startFactory());
    }
}
