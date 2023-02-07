<?php
echo "<br/>";
include ('header.php');
include ('session.php');
$time = (new DateTime())->getTimestamp();
echo "Welcome to index.php" . PHP_EOL;

echo "<br/>";
$userName = $_SESSION['username'] ?? null;

echo "Hi $userName you in index page." . PHP_EOL;
//setcookie("server01", "index $time");
