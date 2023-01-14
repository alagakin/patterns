<?php

namespace App\Patterns\AbstractFactory;

interface ElementsFactory
{
    public function createList(array $list) : HtmlList;
}