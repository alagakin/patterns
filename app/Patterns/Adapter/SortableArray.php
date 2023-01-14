<?php

namespace App\Patterns\Adapter;


class SortableArray implements Sortable
{
    protected array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function sort() : array
    {
        sort($this->array);
        return $this->array;
    }
}