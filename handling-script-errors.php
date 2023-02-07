<?php

ini_set('error_reporting', E_ALL);

ini_set('display_errors', true);

echo 'display_errors = ' . ini_get('display_errors') . "\n";


$a = 3 / 0;

$b = new \stdClass();

$c = new class{};

$b->s;

$array = [1,2];

$array[1];
$array[3];

echo 'still run to end scripts' . PHP_EOL;;

$errorLevelReporting = error_reporting();
echo $errorLevelReporting . PHP_EOL;