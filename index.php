<?php 
	error_reporting(1);
	session_start();

		$name = $_POST['name'];
		$pass = $_POST['pass'];

	if(isset($_POST['login']))
	{

		if(file_exists("users/$name") && file_exists("users/$name/$pass"))
		{
			$_SESSION['name'] = $name ;
			$_SESSION['pass'] = $pass ;
			setcookie("name",$name,time()+60);
			setcookie("pass",$pass,time()+60);
			header("location:page.php");
		}
		else
		{
			echo "Your Username or Password is invalid.Try Again !!!";
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
		<table border="1">
			<tr>
				<td>Username</td>
				<td><input type="text" value="<?php echo $_COOKIE['name']; ?>" name="name" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" value="<?php echo $_COOKIE['pass']; ?>" name="pass" required></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" name="login"></td>
			</tr>
			<tr>
				<td colspan="2"><span>if you have no account</span><a href="signup.php">Sign Up Here</a></td>
			</tr>
		</table>
	</form>
</body>
</html>