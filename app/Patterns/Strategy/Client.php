<?php

namespace App\Patterns\Strategy;


class Client
{
    public static function call()
    {
        $items = 10000;
        $array = range(0, $items);
        shuffle($array);
        $sorter = new Sorter(new InsertionSortStrategy(), $array);
        $sorter->sort();
        return $sorter->getExecutionTime();

    }
}