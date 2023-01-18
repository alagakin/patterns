<?php

namespace App\Patterns\Command;

class Queue
{
    protected array $commands;

    public function setCommand(Command $command)
    {
        $this->commands[] = $command;
    }

    public function execute()
    {
        foreach ($this->commands as $command)
        {
            $command->execute();
        }
    }

    public function undo()
    {
        foreach (array_reverse($this->commands) as $command)
        {
            $command->undo();
        }
    }
}