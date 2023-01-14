<?php

namespace App\Patterns\AbstractFactory;

use JetBrains\PhpStorm\Pure;

class UglyFactory implements ElementsFactory
{
    #[Pure] public function createList(array $list): HtmlList
    {
        return new OlList($list);
    }
}