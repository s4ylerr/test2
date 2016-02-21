<?php 

function math_tasks($a,$b){
	$c = $a+$b;
	echo $a.'+'.$b.'=' .$c;
	echo "<br>";
}
$a = 10;
$b = 8;

math_tasks($a,$b);

$d = rand(1, 20);
$f = rand(1, 20);
math_tasks($d,$f);
$c= rand(1,50);
$r= rand(1, 50);
math_tasks($c,$r);


 ?>