<?php
function between($a){
    if(strlen($a) <=  10 && strlen($a) >= 6){
        return true;
    }else{
        return false;
    }
}


function onlyLettersAndDigits($a){
    if(ctype_alnum($a) == true){
        return true;
    }else {
        return false;
    }
}

function twoDigits($a){
    $count = substr_count($a, '0')
        + substr_count($a, '1')
        + substr_count($a, '2')
        + substr_count($a, '3')
        + substr_count($a, '4')
        + substr_count($a, '5')
        + substr_count($a, '6')
        + substr_count($a, '7')
        + substr_count($a, '8')
        + substr_count($a, '9');
    if($count >= 2){
        return true;

    }else{
        return false;
    }
}

$password = readline();
if(between($password) == true && onlyLettersAndDigits($password) == true && twoDigits($password) == true){
    echo "Password is valid";
}
if(between($password) == false){
    echo "Password must be between 6 and 10 characters\n";
}
if(onlyLettersAndDigits($password) == false){
    echo "Password must consist only of letters and digits\n";
}
if(twoDigits($password) == false){
    echo "Password must have at least 2 digits\n";
}