<?php
$input = readline();

while($input != "end"){
list($artist,$song) = explode(":",$input);
if(validArtist($artist) && validSong($song)){
  $length  = strlen($artist);
  $cyphered = "";
  for($i = 0;$i<strlen($input);$i++) {
      if(ord($input[$i]) >= 65 && ord($input[$i]) <= (90 - $length) || ord($input[$i]) >= 97 && ord($input[$i]) <= (122 - $length)){
          $cyphered .= chr(ord($input[$i]) + $length);
      }else if($input[$i] === ":"){
          $cyphered .= "@";
      }else if($input[$i] == " ") {
          $cyphered .= " ";
      }else if($input[$i] == "'"){
          $cyphered .= "'";
      }else if((ord($input[$i]) >= (90-$length) && ord($input[$i]) <= 90 )){
    $temp1 = (90 - ord($input[$i]));
    $temp1 = $length - $temp1;
    $cyphered .= chr(64+ $temp1);
      }else if((ord($input[$i]) >= (122-$length) && ord($input[$i]) <= 122 )){
          $temp2 = (122 - ord($input[$i]));
          $temp2 = $length - $temp2;
          $cyphered .= chr(96+ $temp2);
      }
  }
  echo "Successful encryption: $cyphered" . PHP_EOL;
}else{
    echo "Invalid input!" . PHP_EOL;
}
    $input = readline();
}
function validArtist($a)
{
    if (ctype_upper($a[0]) && ctype_alpha($a[0])) {
        for ($i = 1; $i < strlen($a); $i++) {
            if (ctype_lower($a[$i]) && ctype_alpha($a[$i]) || $a[$i] == "'" || $a[$i] == " ") {
                continue;
            } else {
                return false;
            }

        }
    } else {
            return false;

    }
    return true;
}
    function validSong($b)
    {
        for ($i = 0; $i < strlen($b); $i++) {
            if (ctype_alpha($b[$i]) && ctype_upper($b[$i]) || $b[$i] == " ") {
                continue;
            } else {
                    return false;

            }
        }
        return true;

    }
