<?php

namespace Victorhsanjos\PadroesDeProjeto\FactoryMethod;

abstract class Creator
{
    abstract protected function factoryMethod();

    public function startFactory()
    {
        $mfg = $this->factoryMethod();

        return $mfg;
    }
}
