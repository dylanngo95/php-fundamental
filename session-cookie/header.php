<?php
$previous_name = session_name("SESSION_ID");
//ini_set( "session.cookie_lifetime", 500);
//ini_set( "session.gc_maxlifetime", 1440);
session_start();

echo "<br/>";
echo "Header block.php" . PHP_EOL;

$userName = $_SESSION['username'] ?? null;
echo "<br/>";
echo "Hi $userName you in header block." . PHP_EOL;

echo '
<ul>
	<li>
		<a href="/">Home</a>
	</li>
	<li>
		<a href="user.php">Visit User</a>
	</li>
	<li>
		<a href="login.php">Login</a>
	</li>
		<li>
		<a href="http://app1.local:8081/">Cross Site</a>
	</li>
</ul>
';
