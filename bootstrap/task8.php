<?php 

$num = array();
	for ($i=1; $i <100 ; $i++) { 
		$num[$i] = rand(1,50);
		if ($num[$i]%2 == 0) {
			$num[$i] = $num[$i];
		}
		else ($num[$i]+=1)
			echo $num[$i]." " ;
	}
 ?>