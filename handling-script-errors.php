<?php

/**
 * Documatation for Errors Handler in PHP
 * 
 * https://www.php.net/manual/en/errorfunc.configuration.php
 */

ini_set('error_reporting', E_ALL & ~E_STRICT & ~E_DEPRECATED);

/**
 * Display errors should enable on development environment
 * It'll be show in the FE so show to end user
 */
ini_set('display_errors', true);

/**
 * https://www.php.net/manual/en/function.error-log.php
 * 
 * Log errors should enable to production environment
 * It's will show on STDOUT, Not show to end user
 * It'll be affect to error_log function
 */
ini_set('log_errors', true);


echo 'display_errors = ' . ini_get('display_errors') . "\n";


$a = 3 / 0;

$b = new \stdClass();

$c = new class{};

$b->s;

$array = [1,2];

$array[1];
$array[3];

echo '=======> Run scripts' . PHP_EOL;

/**
 * you should know about the log limit at about 8000 characters 
 */
error_log("Failed to connect to database!", 0);

include('dylan-not-real.php'); // Warning error so continue excute script
require('dylan-not-real.php'); // Fatal error so stop excute script
$d = new DylanNotReal();

echo '====> End scripts' . PHP_EOL;