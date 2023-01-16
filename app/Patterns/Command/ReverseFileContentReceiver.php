<?php

namespace App\Patterns\Command;

use Illuminate\Support\Facades\File;

class ReverseFileContentReceiver
{
    public function reverse(string $filePath)
    {
        $fullPath = base_path() . $filePath;
        $content = File::get($fullPath);
        $content = strrev($content);
        File::put($fullPath, $content);
    }
}