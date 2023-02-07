<?php

echo "<br/>";
include ('header.php');
include ('session.php');

$time = (new DateTime())->getTimestamp();

echo "Welcome to User.php" . PHP_EOL;

echo "<br/>";
$userName = $_SESSION['username'] ?? null;
echo "Hi $userName you in User page." . PHP_EOL;
echo "<br/>";

setcookie("server02", "user $time");