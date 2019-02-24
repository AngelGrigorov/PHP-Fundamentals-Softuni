<?php
function printLine($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        echo "$i ";
    }
    echo PHP_EOL;
}
function printTriangle($n) {
    for ($line = 1; $line <= $n; $line++)
        printLine(1, $line);

    for ($line = $n - 1; $line >= 1; $line--)
        printLine(1, $line);
}
printTriangle(intval(readline()));
