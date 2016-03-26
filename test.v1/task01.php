<?php

if (!isset($_GET['submit'])) {

echo "<form action ='task01.php' method='get'>";

echo '<input type="text" name="str">';
echo '<input type="text" name="sym">';
echo '<input type="submit" name="submit" value="submit">';

echo "</form>";
}
else {
	$str_user = $_GET['str'];
	$sym_user = $_GET['sym'];

	function str_trans ($var1, $var2){

	$res_str = explode(' ', $var1);

	$count = count($res_str);
	echo "<ul>";
	for ($i=0; $i <$count ; $i++) {
		$res_str[$i] = str_split($res_str[$i] );
		$current_count = count($res_str[$i]);
		for ($j=1; $j < $current_count; $j++) {
			$res_str[$i][$j] = $var2 ;
		}
		$res_str[$i] = implode(" ", $res_str[$i] );
		echo "<li>".$res_str[$i]."</li>";
	}
	echo "</ul>";
}

	}

str_trans ($str_user,$sym_user);

 ?>
