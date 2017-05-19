<?php

$x = true;
$val = $x ? 12 : 85;
echo $val;



$x = 0;
$y = 1;
$val = $x ?: $y;
echo $val;




$y = 1;
$val = $x ?? $y;
echo $val;



$x = 1;
$y = 0;
echo $x <=> $y;




