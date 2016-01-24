<?php

namespace Victorhsanjos\PadroesDeProjeto\Test;

use Victorhsanjos\PadroesDeProjeto\FactoryMethod\TextFactory;

class TextFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testSeOMetodoFactoryMethodFoiImplementado()
    {
        $this->assertTrue(method_exists(TextFactory::class, 'factoryMethod'));
    }

    public function testOMetodoStartFactory()
    {
        $textFactory = new TextFactory();

        $this->assertEquals('this is a text.', $textFactory->startFactory());
    }
}
