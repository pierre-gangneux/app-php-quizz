<?php

namespace _inc\utils;
function dump($var, bool $die = false): void
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';

    if ($die) {
        die();
    }
}