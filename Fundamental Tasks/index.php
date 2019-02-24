<?php
$balance = floatval(readline());
$command = readline();
while ($command != "Game Time") {
    switch ($command) {
        case "OutFall 4" :
            $balance -= 39.99;
            if ($balance >= 0) {
                echo "Bought OutFall 4\n";

                if($balance == 0){
                    echo "Out of money!";
                    return;
                }}
             else {
                echo "Too Expensive";
            }
            break;
        case "CS: OG" :
            $balance -= 15.99;
            if ($balance >= 0) {
                echo "Bought CS: OG\n";
                if($balance == 0){
                    echo "Out of money!";
                    return;
                }
            } else {
                echo "Too Expensive\n";
            }
            break;
        case "Zplinter Zell" :
            $balance -= 19.99;
            if ($balance >= 0) {
                echo "Bought Zplinter Zell\n";
                    if($balance == 0){
                        echo "Out of money!";
                        return;
                    }
            } else {
                echo "Too Expensive\n";
            }

            break;
        case "Honored 2" :
            $balance -= 59.99;
            if ($balance >= 0) {
                echo "Bought Honored 2\n";
                if($balance == 0){
                    echo "Out of money!";
                    return;
                }
            } else {
                echo "Too Expensive\n";
            }


            break;
        case "RoverWatch" :
            $balance -= 29.99;
            if ($balance >= 0) {
                echo "Bought RoverWatch\n";
                if($balance == 0){
                    echo "Out of money!";
                    return;
                }
            } else {
                echo "Too Expensive\n";
            }


            break;
        case "RoverWatch Origins Edition" :
            $balance -= 39.99;
            if ($balance >= 0) {
                echo "Bought RoverWatch Origins Edition\n";
                if($balance == 0){
                    echo "Out of money!";
                    return;
                }
            } else {
                echo "Too Expensive\n";
            }


            break;
        default :
            echo "Not Found\n";
            break;


    }
    $command = readline();

}