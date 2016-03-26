<?php 

function odd_even ($param){
	$count = count($param);
	$sum = 0;

	for ($i=0; $i < $count ; $i++) { 
		$sum+=$param[$i];

	}
	if ($sum %2 === 0) {
		echo "Even";
	}
	else {
		echo "ODD";
	}
}

//function arr_gen($el){
//	for ($j=0; $j < $el ; $j++) { 
//		$arr[$j] =rand(1,20);
//	}
//	return $arr;
//		var_dump($arr)

//}

$arr = [1,2,3,4,5,6,7,8,9,10];
odd_even ($arr);

 ?>