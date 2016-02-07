<?php 
session_start() ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
<?php 

if (!empty($_POST['submit']))  {
	$_SESSION['user'] = $_POST['user'];
	echo "Hello  ".$_SESSION['user'];
	echo "<br>";
	echo "<a href='login2.php'>neXt</a>";
} else {
 ?>
	<form action="login.php" method="post">
		User
		<input type="text" name="user">
		Password
		<input type="password" name="password">

		<input type="submit" name="submit" value="login">

	</form>
	<?php 
	}
	 ?>
		
</body>
</html>