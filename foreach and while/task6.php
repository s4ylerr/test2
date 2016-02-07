<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>task 6</title>
</head>
<body>
		<form action="task6.php" method="get">

		<select name="city">
			<option value="sofia">София</option>
			<option value="madrid">Мадрид</option>
			<option value="paris">Париж</option>
		</select>

		<input type="submit" name="submit" value="Избери">
			

		</form>

		<?php 
		if (!empty ($_GET['submit'])) {
			# code...
		}


		$ = array(
			'Bulgaria' => 'sofia' ,
			'Spain'    => 'madrid',
			'France'   => 'paris' );



		 ?>

</body>
</html>