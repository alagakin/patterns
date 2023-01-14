<?php

namespace App\Patterns\AbstractFactory;

class Client
{
    public static function call()
    {
        //usually receive it from outside, for example - from provider
        $factory = new PrettyFactory();
        $list = $factory->createList([1, 5,2, 6, 7]);
        //if it were UglyFactory, the result would be different
        echo $list->render();
    }
}