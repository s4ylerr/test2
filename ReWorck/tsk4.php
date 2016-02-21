<?php 
header('content-type:text/html;charset=utf-8');

$a = rand(1,10);
$b = rand(-10, 20);
$c = $a + $b;

echo "<p> a = ".$a."</p>";
echo "<p> b = ".$b."</p>";
echo "<p> c = ".$c."</p>";

if ($c >= 0) {
	echo "Числото е положително";
}else {
	echo "Числото е отрицателно";
}

 ?>