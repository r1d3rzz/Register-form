<?php
error_reporting(1);
session_start();
	echo "username is ".$_SESSION['name']."<br/>";
	echo "password is ".$_SESSION['pass']."<br/>";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<a href="logout.php">Logout</a>
</body>
</html>