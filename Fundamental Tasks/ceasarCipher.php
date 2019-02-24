<?php
$input = readline();
$cipher = "";
for($i = 0;$i<strlen($input);$i++){
    $numeric = ord($input[$i])+3;
    $cipher .= chr($numeric);
}
echo $cipher;