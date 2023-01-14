<?php

namespace App\Patterns\AbstractFactory;

use JetBrains\PhpStorm\Pure;

class PrettyFactory implements ElementsFactory
{
    #[Pure] public function createList(array $list): HtmlList
    {
        return new UlList($list);
    }
}