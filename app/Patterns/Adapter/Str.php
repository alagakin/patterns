<?php

namespace App\Patterns\Adapter;


final class Str
{
    protected string $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function toArray() : array
    {
        return str_split($this->string);
    }
}