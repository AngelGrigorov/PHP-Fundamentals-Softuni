<?php
$input = explode(" ", readline());
$input = array_map('intval', $input);
for ($i = 0; $i < count($input); $i++) {
    $leftSum = SumLeft($input, $i);
    $rightSum = SumRight($input, $i);
    if ($leftSum == $rightSum) {
        echo $i.PHP_EOL;

        return;
    }
}
echo "no".PHP_EOL;
function SumLeft($arr = array(), $pos)
{
    $leftSum = 0;
    for ($i = $pos; $i >= 0; $i--) {
        $nextPos = $i - 1;
        if ($i == 0) {
            $leftSum += 0;
            break;
        } else {
            $leftSum += $arr[$nextPos];
        }
    }

    return $leftSum;
}

function SumRight($arr = array(), $pos)
{
    $rightSum = 0;
    for ($i = $pos; $i < count($arr); $i++) {
        $nextPos = ($i + 1) % count($arr);
        if (count($arr) == 1 || $nextPos == 0) {
            $rightSum += 0;
            break;
        } else {
            $rightSum += $arr[$nextPos];
        }
    }

    return $rightSum;
}