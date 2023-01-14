<?php

namespace App\Patterns\AbstractFactory;

abstract class HtmlList
{
    protected array $list;

    public function __construct(array $list)
    {
        $this->list = $list;
    }

    abstract public function render() : string;
}