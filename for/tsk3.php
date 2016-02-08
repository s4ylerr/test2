<?php 
header('content-type:text/html;charset=utf-8');

$x = rand(1, 20);
$y = rand(20, 40);

for ($i=$x; $i <= $y ; $i++) { 
	if ($i %3 == 0 || $i%7 == 0)  {
		echo "<p>".$i. " Дели се на 3 или 7  </>";
	}else {
		echo "<p>".$i. " не се дели </>";
	}
}


 ?>