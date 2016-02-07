<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form test</title>
</head>
<body>

<form action="get_post.php" method="post">
	username<input type="text" name="username" >
	passord<input type="text" name="password" >

	<input type="submit" name="submit" value="submit">

</form>
<?php 

/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/
if (!empty ($_POST['submit'])) {
	echo $_POST['username'];
}



 ?>
		
</body>
</html>