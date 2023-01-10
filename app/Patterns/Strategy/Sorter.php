<?php

namespace App\Patterns\Strategy;


class Sorter
{
    protected Strategy $strategy;
    protected array $array;
    protected float $executionTime;

    public function __construct(Strategy $strategy, array $array)
    {
        $this->strategy = $strategy;
        $this->array = $array;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function sort() : array
    {
        $time_start = microtime(true);
        $sorted = $this->strategy->sort($this->array);
        $time_end = microtime(true);
        $this->executionTime = $time_end - $time_start;
        return $sorted;
    }

    public function getExecutionTime() : float
    {
        return $this->executionTime;
    }
}