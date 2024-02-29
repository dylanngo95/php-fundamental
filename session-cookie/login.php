<?php

echo "<br/>";
include ('header.php');
include ('session.php');

$userName = $_GET['username'] ?? null;
$userNameSession = $_SESSION['username'] ?? null;
$timeSession = $_SESSION['time'] ?? null;

if (!$userNameSession && $userName) {
	$time = (new DateTime())->getTimestamp();
	$_SESSION['username'] = $userName;
	$_SESSION['password'] = '123456';
	$_SESSION['time'] = $time;
}

//phpinfo(); die();

echo "<br/>";

echo "You are login with $userNameSession account at $timeSession";
