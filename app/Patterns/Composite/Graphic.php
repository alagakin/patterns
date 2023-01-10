<?php

namespace App\Patterns\Composite;

abstract class Graphic
{
    public function addChild(Graphic $graphic): void {}

    public function isComposite() : bool
    {
        return false;
    }

    abstract function render();
}