<?php 
session_start();


$l = 6;
if (isset($_POST['submit'])) 
{
	if (strlen($_POST['username']) && strlen($_POST['password']) >= $l) 
	{
		$_SESSION['username'] = htmlspecialchars($_POST['username']);	
		$_SESSION['password'] = htmlspecialchars($_POST['password']);
		header('Location: login.php');
	}
else
{
	echo "<h3>Username and password must be greater than 6 characters";
}

}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>registration page</title>
 </head>
 <body>
 
<form method="post" action= "<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>">
	<h3>REGISTER
	<h3>Username: <input type="text" name="username" placeholder="Enter a Username" required></h2>
	<h3>Password: <input type="password" name="password" placeholder="Enter a Password" required ><br>
	<input type="submit" name="submit">
</form>
 </body>
 </html>