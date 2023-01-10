<?php

namespace App\Patterns\Composite;

class Block extends Graphic
{
    public function isComposite() : bool
    {
        return false;
    }

    public function render()
    {
        $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        return '<div class="block" style="background-color: ' . $color . '"></div>';
    }
}