<?php

namespace Victorhsanjos\PadroesDeProjeto\FactoryMethod;

class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = 'this is a graphic.<3';

        return $this->mfgProduct;
    }
}
