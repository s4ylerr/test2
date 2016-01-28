<?php 

$a = rand(0, 100000);
$b = 3;
$c = 5;
$d = 7;

 if ($a% 3 == 0 ) {
 	if ($a% 5 ==0) {
 		if ($a% 7 == 0) {
 			echo "3-5-7";
 		} else {
 			echo "3-5";
 		}
 	}else {
 		echo "3";
 	}
 }elseif ($a% 5 == 0 {
 	if ($a% 7 == 0) {
 		echo "5 - 7";
 	} else {
 		echo "5";
 	}
 } elseif ($a% 7 == 0) {
 	 if ($a% 3 == 0) {
 	 	
 	 }
 }