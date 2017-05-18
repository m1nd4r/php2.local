<?php

function getPrefix()
{
    $prefix = 'project';
    return function ($name) use ($prefix) {
        return $prefix . '_' . $name;
    };
}

echo getPrefix()('users');