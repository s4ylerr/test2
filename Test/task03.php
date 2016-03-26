<?php
$name = $_GET['username'];
$password = $_GET['password'];
$username = 'Plamen';
$pass = '1234';

function login($username,$password){
	if (!empty($username == $name)&($password == $pass)) {
		echo "Welcome!";
	}else {
	echo "Wrong username!";
	}
}
login(3,1234,1);
/*. Дефинирайте функция, чрез която може да отпечатвате известните ви видове input/type = text, type = password и т.н./. Чрез дефинираната от вас функция отпечатайте форма, в която потребителя трябва да въведе потребителско име и парола.
*/

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UT-8">
		<title>task03</title>
	</head>
	<body>
		<form action="task03.php" method="get">
		Username
		<input type="text" name="username" value="username"></br>
		Password
		<input type="text" name="password" value="password"></br>
		<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>	

