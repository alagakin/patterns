<?php

namespace App\Patterns\Decorator;

class ReverseStreamDecorator extends StreamDecorator
{
    protected function handleBufferFull()
    {
        static::$buffer = strrev(static::$buffer);
        $this->component->handleBufferFull();
    }
}