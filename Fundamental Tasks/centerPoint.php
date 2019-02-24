<?php
$x1 = doubleval(readline());
$y1 = doubleval(readline());
$x2 = doubleval(readline());
$y2 = doubleval(readline());
function closestPoint($x1, $y1, $x2, $y2)
{
    $distance1 = sqrt($x1) + sqrt($y1);
    $distance2 = sqrt($x2) + sqrt($y2);
    if ($distance1 > $distance2) {
        return $x2 . ", " . $y2;
    } else {
        return $x1 . ", " . $y1;
    }

}

$result = closestPoint($x1, $y1, $x2, $y2);
echo "(" . $result . ")";