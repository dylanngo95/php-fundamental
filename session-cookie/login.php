<?php
echo "<br/>";
include ('header.php');
include ('session.php');

$userName = $_SESSION['username'] ?? null;

if (!$userName) {
	$time = (new DateTime())->getTimestamp();
	$_SESSION['username'] = "Dylan $time";
	$_SESSION['password'] = '123456';
	$_SESSION['time'] = $time;
}

echo "You login with user Name $userName";