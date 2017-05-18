<?php


require __DIR__ . '/autoload.php';

function getFilter($type)
{
    switch ($type) {
        case 'email':
            return function ($x) {
                return trim($x);
            };
            break;
        case 'username':
            return function ($x) {
                return str_replace(' ', '', $x);
            };
            break;
    }
}

echo getFilter('email')('   fsd  fs df sd fsdf    ');