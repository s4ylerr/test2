<?php 
$arr = array();

for ($i=0; $i <100 ; $i++) { 
	$arr[$i] = rand(1, 100);
	echo $arr[$i].' ';
}
$count = count($arr);

echo "<p>Array elements count  " .$count."</>";





 ?>