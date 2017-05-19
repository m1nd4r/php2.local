<?php

function gen()
{
    for ($i=1; $i<10; $i++) {
        yield $i . "\n";
    }
}

foreach (gen() as $n) {
    echo $n;
}