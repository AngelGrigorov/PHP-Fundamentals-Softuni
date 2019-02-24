<?php
$re = '/.*%(?<name>[A-Z][a-z]+)%.*<(?<prod>\w+)>.*\|(?<count>[0-9]+)\|.*?(?<price>[0-9]+\.?[0-9]+)\$$/m';
$input = readline();
$sum = 0;
while($input != "end of shift") {

    if(preg_match($re, $input, $matches)){
        printf("%s: %s - %.2f\n",$matches['name'],$matches['prod'],$matches['count'] * $matches['price']);
$sum += $matches['count'] * $matches['price'];
    }

    $input = readline();

}
printf("Total income: %.2f",$sum);


