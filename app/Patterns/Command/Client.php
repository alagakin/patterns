<?php

namespace App\Patterns\Command;

class Client
{
    public static function call()
    {
        $path = '/app/Patterns/Command/test.txt';
        $queue = new Queue();
        $receiver = new ReverseFileContentReceiver();
        $command = new ReverseFileContentCommand($receiver, $path);
        $queue->setCommand($command);
        $command2 = new AppendTextCommand($path, 'Test Text');
        $queue->setCommand($command2);
        $queue->execute();
//        $queue->undo();
    }
}