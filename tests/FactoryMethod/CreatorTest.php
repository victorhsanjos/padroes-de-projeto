<?php

namespace Victorhsanjos\PadroesDeProjeto\Test\FactoryMethod;

use Victorhsanjos\PadroesDeProjeto\FactoryMethod\Creator;

class CreatorTest extends \PHPUnit_Framework_TestCase
{
    public function testSeAInterfaceCreatorExiste()
    {
        $this->assertTrue(class_exists(Creator::class));
    }

    public function testSeOMetodoFactoryMethodExiste()
    {
        $this->assertTrue(method_exists(Creator::class, 'factoryMethod'));
    }

    public function testSeOMetodoStartFactoryExiste()
    {
        $this->assertTrue(method_exists(Creator::class, 'startFactory'));
    }
}
