<?php

namespace App\Patterns\AbstractFactory;

class UlList extends HtmlList
{
    public function render() : string
    {
        $str = '<ul>';
        foreach ($this->list as $item) {
            $str .= '<li>' . $item . '</li>';
        }
        $str .= '</ul>';
        return $str;
    }
}