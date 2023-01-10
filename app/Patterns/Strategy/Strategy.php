<?php

namespace App\Patterns\Strategy;

interface Strategy
{
    public function sort(array $array) : array;
}