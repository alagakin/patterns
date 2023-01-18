<?php

namespace App\Patterns\Command;

use Illuminate\Support\Facades\File;

class ReverseFileContentReceiver
{
    public function reverse(string $filePath)
    {
        //it's supposed to be a complex logic, so I put it into receiver
        $fullPath = base_path() . $filePath;
        $content = File::get($fullPath);
        $content = strrev($content);
        File::put($fullPath, $content);
    }
}