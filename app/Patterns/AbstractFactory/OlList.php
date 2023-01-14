<?php

namespace App\Patterns\AbstractFactory;

class OlList extends HtmlList
{
    public function render() : string
    {
        $str = '<ol>';
        foreach ($this->list as $item) {
            $str .= '<li>' . $item . '</li>';
        }
        $str .= '</ol>';
        return $str;
    }
}