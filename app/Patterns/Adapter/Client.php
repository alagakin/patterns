<?php

namespace App\Patterns\Adapter;


class Client
{
    public static function call()
    {
        $array = new SortableArray([1, 9, 2, 7]);
        print_r($array->sort());

        echo '<br>';

        $str = new Str('3458211');
        $string = new SortableString($str);
        print_r($string->sort());
    }
}