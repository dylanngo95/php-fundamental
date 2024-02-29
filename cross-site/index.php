<?php
echo "<br/>";

$time = (new DateTime())->getTimestamp();
$serverName = $_SERVER['SERVER_NAME'] .':'. $_SERVER['SERVER_PORT'];
echo "Welcome to $serverName" . PHP_EOL;

echo "<br/>";

//phpinfo();die();

$cookies = $_COOKIE;
echo print_r($cookies, true);
echo "<br/>";

$queryString = $_SERVER['QUERY_STRING'] ?? null;
echo print_r($queryString, true);

echo "<br/>";
