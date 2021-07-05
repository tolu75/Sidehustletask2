<?php  
session_start();

echo "<h3>REGISTERED SUCCESSFULLY, <br>PLEASE LOGIN";
	
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<form method="post" >
		<h3>Username: <input type="text" name="username" placeholder="Username" required></h3>
		<h3>Password: <input type="password" name="password" placeholder="Password" required></h3>
		<input type="submit" name="login">
	</form>

<?php if (isset($_POST['login'])) {
		$name = $_SESSION['username'];
		$password = $_SESSION['password'];
	if ($name == $_POST['username']) {
		if ($password == $_POST['password']) {
			echo "login Successful";
			header('Location: welcome.php');
		}
		else{ echo "failed login";}
	}
		}
		?>
</body>
</html>