<?php
function factorial($number) {

    if ($number < 2) {
        return 1;
    } else {
        return bcmul($number , factorial($number-1));
    }
}
$first = intval(readline());
$second = intval(readline());
printf("%.2f",(factorial($first)) / (factorial($second)));
