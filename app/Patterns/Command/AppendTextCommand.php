<?php

namespace App\Patterns\Command;

use Illuminate\Support\Facades\File;

class AppendTextCommand implements Command
{
    protected string $filePath;
    protected string $text;

    public function __construct(string $filePath, string $text)
    {
        $this->filePath = $filePath;
        $this->text = $text;
    }

    public function execute()
    {
        //this isn't supposed to be a complex logic, so I put it here
        $fullPath = base_path() . $this->filePath;
        $content = File::get($fullPath);
        $content = $content . $this->text;
        File::put($fullPath, $content);
    }

    public function undo()
    {
        $fullPath = base_path() . $this->filePath;
        $content = File::get($fullPath);
        $content = substr($content, 0,strlen($content) - strlen($this->text));
        File::put($fullPath, $content);
    }
}