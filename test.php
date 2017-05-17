<?php


require __DIR__ . '/autoload.php';

function first()
{
    echo 'First';
    return false;
}

function second()
{
    echo 'Second';
    return true;
}

var_dump(second() xor first());