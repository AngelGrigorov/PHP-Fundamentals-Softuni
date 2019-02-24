<?php
$sequencesLength = 5;
$command = "1!0!1!1!0";
$modifiedArrayCount = 0;
while ($command != "Clone them!"){
    $dna = str_split($command);
    for($i = 0;$i < count($dna);$i+=2){
        $modifiedDNA .= $dna[$i] . " ";
    }
    $modifiedArray[$modifiedArrayCount] = $modifiedDNA;
    $modifiedArrayCount++;
    $command = "Clone them!";
}

for($j = 0;$j < count($modifiedArray);$j++){



    $bestSequenceIndex = 0;
    $bestSequenceSum = 0;
    $bestIndex = 0;

    $modifiedArrayDNA = explode(' ',$modifiedArray[$j]);
    for($k = 0;$k < count($modifiedArrayDNA);$k++){
        if($modifiedArrayDNA[$k] == 1){
            $bestIndex++;
            $bestSequenceSum++;
            if($bestIndex > $bestSequenceIndex) {
                $bestSequenceIndex = $bestIndex;
            }
        }
        else{
            $bestIndex = 0;
        }




    }
    $dnaArray[$j] = $modifiedArray[$j] . $bestSequenceIndex . $bestSequenceSum;
    $positionIndex[$j] =
}
//NE STAVAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAa?