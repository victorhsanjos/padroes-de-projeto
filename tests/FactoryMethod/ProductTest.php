<?php

namespace Victorhsanjos\PadroesDeProjeto\Test\FactoryMethod;

use Victorhsanjos\PadroesDeProjeto\FactoryMethod\Product;

class ProductTest extends \PHPUnit_Framework_TestCase
{
    public function testSeAInterfaceCreatorExiste()
    {
        $this->assertTrue(interface_exists(Product::class));
    }

    public function testSeOMetodoGetPropertiesExiste()
    {
        $this->assertTrue(method_exists(Product::class, 'getProperties'));
    }
}
