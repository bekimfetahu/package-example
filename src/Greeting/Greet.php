<?php
namespace Greeting;

class Greet
{
    public static function hello($name = 'World'){
        echo 'Hello '. $name;
    }
}