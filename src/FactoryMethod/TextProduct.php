<?php

namespace Victorhsanjos\PadroesDeProjeto\FactoryMethod;

class TextProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = 'this is a text.';

        return $this->mfgProduct;
    }
}
