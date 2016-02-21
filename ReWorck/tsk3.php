<?php 
header('content-type:text/html;charset=utf-8');

$a = rand(1, 20);
$b = rand(1, 20);
$c = $a + $b;

echo "<p> a = " .$a. "</p>";
echo "<p> b = " .$b. "</p>";
echo "<p> c = " .$c. "</p>";

if ($c %2 == 0) {
	echo "Числото е четно";
}else {
	echo "Числото не е четно";
}


 ?>