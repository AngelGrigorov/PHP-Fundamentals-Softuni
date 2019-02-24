<?php

function fib($n)
{
    if ($n <= 1)
        return $n;
    return fib($n - 1) +
        fib($n - 2);
}

$n = intval(readline());
echo fib($n);