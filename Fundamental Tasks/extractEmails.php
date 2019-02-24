<?php
$pattern = "/(?<=\s)([a-z]+|\d+)(\d+|\w+|\.+|-+)([a-z]+|\d+)\@[a-z]+\-?[a-z]+\.[a-z]+(\.[a-z]+)?/";
$str = readline();
preg_match_all($pattern,$str,$matches);

echo implode(PHP_EOL,$matches[0]);