<?php 
error_reporting(1);
session_start();
session_destroy();

if(isset($_POST['logout']))
{
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post">
		<input type="submit" name="logout" value="logout">
	</form>
</body>
</html>