<?php 

$x = 1;
$n = 27;

echo "<ul><li>";
while ($x <= $n) {
	echo $x." ";
	if ($x % 5 == 0 ) {
		echo "</li><li>";
	}
	$x++;
	
}
echo "</li></ul>";


 ?>