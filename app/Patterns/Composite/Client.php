<?php

namespace App\Patterns\Composite;

class Client
{
    public static function call()
    {
        $previous = new BlockGroup();
        $previous->addChild(new Block());
        $previous->addChild(new Block());
        $previous->addChild(new Block());
        $previous->addChild(new Block());

        for ($i = 0; $i <= 8; $i++) {
            $new = new BlockGroup();
            $new->addChild($previous);
            $new->addChild(new Block());
            $new->addChild(new Block());
            $new->addChild($previous);
            $previous = $new;
        }
        $result = $previous->render();


        return view('composite', ['blocks' => $result]);
    }
}