<?php

namespace App\Patterns\Command;

class ReverseFileContentCommand implements Command
{
    protected string $filePath;
    protected ReverseFileContentReceiver $receiver;

    public function __construct(ReverseFileContentReceiver $receiver, string $filePath)
    {
        $this->receiver = $receiver;
        $this->filePath = $filePath;
    }

    public function execute()
    {
        $this->receiver->reverse($this->filePath);
    }

    public function undo()
    {
        $this->receiver->reverse($this->filePath);
    }
}