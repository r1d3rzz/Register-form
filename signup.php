<?php 
error_reporting(1);
session_start();
	$name = $_POST['name'];
	$pass = $_POST['pass'];

	$_SESSION['name'] = $name ;
	$_SESSION['pass'] = $pass ;

	if(isset($_POST['reg']))
	{
		if(file_exists("users/$name"))
		{
			echo "your name is already exits";
		}
		else
		{
			mkdir("users/$name");
			$arr = fopen("users"."/".$_SESSION['name']."/".$_SESSION['pass'], "w");
			$data = "username is : ".$_SESSION['name']."    "."password is : ".$_SESSION['pass'];

			fwrite($arr, $data);
			header('location:index.php');
		}
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
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td><input type="submit" name="reg" value="Sign Up"></td>
			</tr>
		</table>
	</form>
</body>
</html>