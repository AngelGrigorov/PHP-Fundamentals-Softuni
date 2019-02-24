<?php
$input = readline();
$day = new DateTime($input);
echo $day->format('l') . PHP_EOL;