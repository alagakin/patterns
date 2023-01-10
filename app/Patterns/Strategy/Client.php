<?php

namespace App\Patterns\Strategy;


class Client
{
    public static function call()
    {
        $items = 10000;
        $array = range(0, $items);
        shuffle($array);
        $sorter = new Sorter(new BubbleSortStrategy(), $array);

        $bubbleSorted = $sorter->sort();
        $bubbleExecutionTime = $sorter->getExecutionTime();

        $sorter->setStrategy(new StandardSortStrategy());

        $standardSorted = $sorter->sort();
        $standardExecutionTime = $sorter->getExecutionTime();

        echo 'Items: ' . $items;
        echo '<br>';
        echo 'bubble sort: ' . $bubbleExecutionTime;
        echo '<br>';
        echo 'standard sort: ' . $standardExecutionTime;
    }
}