<?php

namespace App\Patterns\Strategy;


class InsertionSortStrategy implements Strategy
{
    public function sort(array $array): array
    {
        for ($j = 2; $j < count($array); $j++) {
            $key = $array[$j];
            $i = $j - 1;
            while ($i >= 0 and $array[$i] > $key) {
                $array[$i + 1] = $array[$i];
                $i = $i - 1;
            }
            $array[$i+1] = $key;
        }
        return $array;
    }
}