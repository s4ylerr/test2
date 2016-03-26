
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>tsk 1</title>
</head>
<body>
<?php
var_dump($_POST);

if (empty ($_POST['submit'])) {
	


 ?>

		<h1>Chose your menu</h1>
		<form action="tsk1.php" method="post">

		Vegeterian Menu
		<input type="radio" name="menu" value="veg" >
		Meat Menu	
		<input type="radio" name="menu" value="meat">

		<input type="submit" name="submit" value="submit">
					


		</form>

	<?php 

	$veg = array('veg1','veg2','veg3','veg4','veg5');
	$meat = array('meat1','meat2','meat3','meat4','meat5');

	}else {
		$menu = $_POST['menu'];
		if ($menu === 'veg') {
			echo 'working';
		}else {
			echo 'working1';
		}
	}


	 ?>


</body>
</html>