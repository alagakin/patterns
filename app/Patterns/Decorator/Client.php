<?php

namespace App\Patterns\Decorator;

class Client
{
    public static function call()
    {
        $filestream = new ReverseStreamDecorator(
            new UppercaseStreamDecorator(
                new FileStream('stream_output.txt')
            )
        );
        for ($i = 0; $i <= 9; $i++) {
            $filestream->putString('123456789');
        }
    }
}