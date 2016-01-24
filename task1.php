<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		#first {
			color: red;
		}
		#second {
			color: blue;
		}
		#third {
			color: green;
		}
	</style>
</head>
<body>
	<?php 
	header('content-type:text/html;charset=utf-8');


	$first = "name";
	$second = 222;
	$third = "gghy85@lk";

	echo "<p id='first'>".$first."</p><p id='second'> ".$second."</p><p id='third'> ".$third."</p>";
	?>
	
</body>
</html>
