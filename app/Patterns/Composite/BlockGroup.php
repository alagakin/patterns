<?php

namespace App\Patterns\Composite;

class BlockGroup extends Graphic
{
    protected array $children;

    public function addChild(Graphic $graphic) : void
    {
        $this->children[] = $graphic;
    }

    public function isComposite() : bool
    {
        return true;
    }

    public function render()
    {
        $str = '<div class="group">';
        foreach ($this->children as $child) {
            $str .= $child->render(count($this->children));
        }
        $str .= '</div>';
        return $str;
    }

}