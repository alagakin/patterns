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
        $stringToWrite = substr(static::$buffer, 0, $this->bufferMaxSize);
        Storage::disk('local')->append($this->filename, $stringToWrite);
        static::$buffer = substr(static::$buffer, $this->bufferMaxSize, strlen(static::$buffer) - $this->bufferMaxSize);
        if (strlen(static::$buffer) > $this->bufferMaxSize) {
            $this->handleBufferFull();
        }
    }
}