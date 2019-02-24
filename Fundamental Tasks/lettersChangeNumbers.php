<?php
$input = preg_split('/\s+/', readline(), null, PREG_SPLIT_NO_EMPTY);
$totalSum = 0.0;
$sum = 0.0;
foreach ($input as $values) {
    $re = '/((?<front>[a-zA-z])(?<num>\d+))(?<back>[a-zA-z])/m';
    preg_match_all($re, $values, $matches, PREG_SET_ORDER, 0);
    for ($i = 0; $i < count($matches); $i++) {
        $front = $matches[$i]['front'];
        $num = $matches[$i]['num'];
        $back = $matches[$i]['back'];
        $frontPos = ord(strtoupper($front)) - ord('A') + 1;
        $backPos = ord(strtoupper($back)) - ord('A') + 1;
        if (ctype_upper($front)) {
            $sum = $num / $frontPos;
        } else {
            $sum = $num * $frontPos;
        }
        if (ctype_upper($back)) {
            $sum -= $backPos;
        } else {
            $sum += $backPos;
        }
    }
    $totalSum += $sum;
}
printf("%.2f", round($totalSum,2));