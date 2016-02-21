<?php 
header('content-type:text/html;charset=utf-8');
$a = rand(1, 40);

echo "<p> a = ".$a. "</p>";

if ($a %2 == 0 ) {
	echo "числото е четно";
}else {
	echo "числото не е четно";
}



 ?>