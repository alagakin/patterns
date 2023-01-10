<?php

namespace App\Patterns\Decorator;

class ReverseStreamDecorator extends StreamDecorator
{
    public function putInt(int $int)
    {
        $int = strrev($int);
        parent::putInt($int);
    }

    public function putString(string $string)
    {
        $string = strrev($string);
        parent::putInt($string);
    }
}