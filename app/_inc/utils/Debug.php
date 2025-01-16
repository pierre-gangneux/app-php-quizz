<?php

namespace _inc\utils;

class Debug {
    static public function dump($var, bool $die = false): void
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    
        if ($die) {
            die();
        }
    }
}