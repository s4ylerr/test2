<?php 

function arr_task($x,$m,$n,$num){
	
	$sum = $m*$n;
	$arr = array(array());

	for ($i=0; $i <$sum ; $i++) {
		for ($j=0; $j < $sum  ; $j++) { 
		 	$arr[$i][$j]= $x;
		 	 $x+= $num;
		 } 
		
	}
	echo "<table border = 1>";
for ($q=0; $q < $sum; $q++) { 
	echo "<tr>";
	for ($p=0; $p <$sum ; $p++) { 
		echo "<td>".$arr[$p][$q]."</td>";
	}
	echo "</tr>";
}

echo "</table>";
}

$x = rand(1, 10);
$m = 4;
$n = 4;
$num = 5;

arr_task ($x,$m,$n,$num);







 ?>