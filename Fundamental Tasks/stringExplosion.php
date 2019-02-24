<?php
$input = readline();
for ($i = 0; $i < strlen($input); $i++) {
    if ($input[$i] == ">") {
        $power = $input[$i + 1];
        {
            if ($power == 1) {
                $input[$i + 1] = " ";
                $i++;
            } else if ($power > 1) {
                for ($j = 0; $j < $power; $j++) {
                    if ($input[$i + 1 + $j] == ">") {
                        $power += $input[$i + 1 + $j + 1];
                        $power++;
                    } else {
                        $input[$i + 1 + $j] = " ";
                    }
                }
            }
        }
    }
}
$array = explode(" ",$input);
echo implode('',$array);