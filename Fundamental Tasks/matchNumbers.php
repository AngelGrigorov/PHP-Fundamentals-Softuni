<?php
$pattern = '/(^|(?<=\s))-?\d+(\.\d+)?($|(?=\s))/';
$str = readline();
preg_match_all($pattern,$str,$matches);

echo implode(" ",$matches[0]);
