<?php

namespace App\Patterns\Decorator;

use Illuminate\Support\Facades\Storage;

class FileStream extends Stream
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    protected function handleBufferFull()
    {
        Storage::disk('local')->append($this->filename, static::$buffer);
        static::$buffer = '';
    }
}