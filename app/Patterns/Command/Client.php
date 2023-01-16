<?php

namespace App\Patterns\Command;

class Client
{
    public static function call()
    {
        $queue = new Queue();
        $receiver = new ReverseFileContentReceiver();
        $command = new ReverseFileContentCommand($receiver, '/app/Patterns/Command/test.txt');
        $queue->setCommand($command);
        $queue->execute();
//        $queue->undo();
    }
}