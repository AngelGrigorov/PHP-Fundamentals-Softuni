<?php

$A = doubleval(readline());
$B = doubleval(readline());
$C = doubleval(readline());
$D = doubleval(readline());
$E = doubleval(readline());
$F = doubleval(readline());
$G = doubleval(readline());
$H = doubleval(readline());

$line1 = Sqrt(($A - $C) * ($A - $C) + ($B - $D) * ($B - $D));
$line2 = Sqrt(($E - $G) * ($E - $G) + ($F - $H) * ($F - $H));

if ($line1 >= $line2) {
    $first = true;
    if (Sqrt($A * $A + $B * $B) > Sqrt($C * $C + $D * $D))
        $first = false;
    if ($first) {
        echo "({$A}, {$B})({$C}, {$D})";
    } else {
        echo "({$C}, {$D})({$A}, {$B})";
    }
} else {
    $first = true;
    if (Sqrt($E * $E + $F * $F) > Sqrt($G * $G + $H * $H))
        $first = false;
    if ($first) {
        echo "({$E}, {$F})({$G}, {$H})";
    } else {
        echo "({$G}, {$H})({$E}, {$F})";
    }
}
