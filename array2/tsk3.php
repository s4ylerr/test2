<?php 

$m = 4;
$n = 5;
$num = 1;

$arr = array(array());

for ($i=0; $i <$m ; $i++) { 
	for ($j=0; $j < $n; $j++) { 
		$arr[$i][$j] = $num;
		$num +=2;
	}
}

/*echo "<pre>";
var_dump($arr);
echo "</pre>";*/
echo "<table border = 1>";
for ($l=0; $l < $m; $l++) { 
	echo "<tr>";
	for ($p=0; $p <$n ; $p++) { 
		echo "<td>".$arr[$l][$p]."</td>";
	}
	echo "</tr>";
}

echo "</table>";




 ?>