<?php
$savings = floatval(readline());
$qualityOfEachDrum = explode(' ', readline());
$temp = $qualityOfEachDrum;
$hitPower = readline();
while ($hitPower != "Hit it again, Gabsy!") {
    for ($i = 0; $i < count($qualityOfEachDrum); $i++) {
        $qualityOfEachDrum[$i] -= $hitPower;
        if ($qualityOfEachDrum[$i] <= 0) {
            $qualityOfEachDrum[$i] = $temp[$i];
            if ($savings - ($temp[$i] * 3) > 0) {
                $savings -= $temp[$i] * 3;
            }else{
                unset($qualityOfEachDrum[$i]);
                unset($temp[$i]);
                $qualityOfEachDrum = array_values($qualityOfEachDrum);
                $temp = array_values($temp);
                $i--;
            }
        }
    }
    $hitPower = readline();

}
echo implode(' ',$qualityOfEachDrum) . PHP_EOL;
printf("Gabsy has %.2flv.",$savings);