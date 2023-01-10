<?php

namespace App\Patterns\Decorator;

class UppercaseStreamDecorator extends StreamDecorator
{
    protected function handleBufferFull()
    {
        static::$buffer = mb_strtoupper(static::$buffer);
        $this->component->handleBufferFull();
    }
}