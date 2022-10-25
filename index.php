<?php

function random_string($type, $length)
{
    if ($type == 'alpha') {
        $random_string = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', $length)), 0, $length);
    }

    if ($type == 'alnum') {
        $random_string = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890', $length)), 0, $length);
    }

    if ($type == 'numeric') {
        $random_string = substr(str_shuffle(str_repeat('1234567890', $length)), 0, $length);
    }

    if ($type == 'nozero') {
        $random_string = substr(str_shuffle(str_repeat('123456789', $length)), 0, $length);
    }

    return trim($random_string);
}

echo random_string('alpha', 50);
echo '<br>';
echo random_string('alnum', 50);
echo '<br>';
echo random_string('numeric', 50);
echo '<br>';
echo random_string('nozero', 50);
