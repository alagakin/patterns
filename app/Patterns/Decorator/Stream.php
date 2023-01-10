<?php

namespace App\Patterns\Decorator;

abstract class Stream
{
    static string $buffer = '';
    protected int $bufferMaxSize = 8;

    function putInt(int $int)
    {
        static::$buffer .= $int;
        if ($this->bufferIsFull()) {
            $this->handleBufferFull();
        }
    }

    function putString(string $string)
    {
        static::$buffer .= $string;
        if ($this->bufferIsFull()) {
            $this->handleBufferFull();
        }
    }

    protected function bufferIsFull() : bool
    {
        if (strlen(static::$buffer) >= $this->bufferMaxSize) {
            return true;
        }
        return false;
    }

    abstract protected function handleBufferFull();
}