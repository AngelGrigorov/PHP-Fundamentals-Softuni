<?php
$n = intval(readline());
function factorial($number) {

    if ($number < 2) {
        return 1;
    } else {
        return bcmul($number , factorial($number-1));
    }
}
echo factorial($n);
