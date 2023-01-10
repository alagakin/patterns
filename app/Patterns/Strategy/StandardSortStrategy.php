<?php

namespace App\Patterns\Strategy;


class StandardSortStrategy implements Strategy
{
    public function sort(array $array): array
    {
        sort($array);
        return $array;
    }
}