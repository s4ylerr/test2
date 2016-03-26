<?php 

$arr = array(
	array('name' => 'musaka', 'cl' => '10', 'gi' => '20', 'fat' => '30', 'pr' => '40'  ),
	array('name' => 'chips', 'cl' => '50', 'gi' => '60', 'fat' => '70', 'pr' => '80'  ),
	array('name' => 'twix', 'cl' => '90', 'gi' => '100', 'fat' => '30', 'pr' => '40'  ),
	array('name' => 'mars', 'cl' => '10', 'gi' => '50', 'fat' => '70', 'pr' => '80'  ),
	array('name' => 'sneakers', 'cl' => '25', 'gi' => '65', 'fat' => '55', 'pr' => '35'  ));

$count = count ($arr);
$hk = 0;

for ($j=0; $j < $count ; $j++) { 
	$arr[$j]['hk']=($arr[$j]['gi']*$arr[$j]['gi'])+($arr[$j]['fat']); // formolata da se naravi 
	$arr[$j]['profit'] = $hk;
}
$sum = 0;
for ($p=0; $p < $count ; $p++) { 
	$sum += $arr[$j]['hk'];
}

$sum_avg = $sum/$count;

$min = $arr[0]['gi'];
$index_min = 0;
for ($k=1; $k <$count ; $k++) { 
	if ($min > $arr[$k]['gi']) {
		$min = $arr[$k]['gi'];
		$index_min = $k;
	}
}
echo "Min is ".$arr[$index_min]['gi'];

echo "<table border=1>";
echo "<tr>";
echo "  
		<td>Brand</td>
		<td>Model</td>
		<td>Color</td>
		<td>Price</td>
		<td>Sold</td>
		<td>Profit</td>";
echo "</tr>";

for ($i=0 ; $i < $count; $i++) { 
	echo "<tr>";
	foreach ($arr[$i] as $value) {
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
}
echo "</table>";


 ?>