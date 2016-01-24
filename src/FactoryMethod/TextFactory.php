<?php

namespace Victorhsanjos\PadroesDeProjeto\FactoryMethod;

class TextFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new TextProduct();

        return $product->getProperties();
    }
}
