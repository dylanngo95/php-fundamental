<?php

include('header.php');

echo "print Index from echo <br/>" . PHP_EOL;

$time_start = microtime(true);

ob_start();

//$fileContent = file_get_contents('content.php');
//eval($fileContent);
// Or include('content.php');
include('content.php');
$content = ob_get_contents();

ob_end_clean();

echo $content;

$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start)/60;

//execution time of the script
echo '<b>Total Execution Time:</b> '.$execution_time.' Mins';
