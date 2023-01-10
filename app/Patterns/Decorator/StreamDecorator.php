<?php

namespace App\Patterns\Decorator;

abstract class StreamDecorator extends Stream
{
    protected Stream $component;

    public function __construct(Stream $component)
    {
        $this->component = $component;
    }

    protected function handleBufferFull()
    {
        $this->component->handleBufferFull();
    }
}