<?php
$pattern = "/\+359([ |-])2\\1([0-9]{3})\\1([0-9]{4})\b/";
$str = readline();
preg_match_all($pattern,$str,$matches);

    echo implode(", ",$matches[0]);
