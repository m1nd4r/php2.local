<?php

function sum($x, ...$nums)
{
    var_dump($nums);
    return $x + array_sum($nums);
}

echo sum(1, 2, 3, 4, 5);


function sums($x, $y, $z)
{
    return $x + $y + $z;
}

$input = [1, 2, 3];
echo sums(...$input);