<?php

namespace App\Patterns\Adapter;


class SortableString implements Sortable
{
    protected Str $str;

    public function __construct(Str $str)
    {
        $this->str = $str;
    }

    public function sort() : array
    {
        $arr = $this->str->toArray();
        sort($arr);
        return $arr;
    }
}