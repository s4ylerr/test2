<?php
$arr = array(array('moovie' => 'Moovie 1', 'origin'=>'USA', 'IMBD' =>'500', 'expense' =>'2000000', 'profit' =>'10000000', 'tickets' =>'12000000'),
		array('moovie' => 'Moovie 2', 'origin'=>'France', 'IMBD' =>'400', 'expence' =>'1000000', 'profit' =>'5000000', 'tickets' =>'10000000', ),
		array('moovie' => 'Moovie 3', 'origin'=>'Germany', 'IMBD' =>'300', 'expense' =>'1500000', 'profit' =>'2500000', 'tickets' =>'8000000'),
		array('moovie' => 'Moovie 4', 'origin'=>'Russia', 'IMBD' =>'200', 'expense' =>'900000', 'profit' =>'3000000', 'tickets' =>'5000000'),
		array('moovie' => 'Moovie 5', 'origin'=>'Bulgaria', 'IMBD' =>'100', 'expense' =>'500000', 'profit' =>'1000000', 'tickets' =>'1500000'));
$count = count ($arr);
$sum=0;
for ($i=0; $i < $count; $i++) { 
	$arr[$i]['ir'] = ($arr[$i]['profit']-$arr[$i]['expense'])/($arr[$i]['IMBD']*$arr[$i]['IMBD']);
	$sum += $arr[$i]['ir'];
}
echo '<table border="2">';
echo '<tr>';
echo "<td>Name</td>
<td> Origin </td>
<td> IMBD </td>
<td> Expence </td>
<td> Profit </td>
<td> Sold Tickets </td>
<td> IR </td>";
echo "</tr>";
for ($j=0; $j < $count; $j++) { 
		
		foreach ($arr[$j] as $value) {
			echo "<td>".$value."</td>";
		}
		echo '</tr>';
	}
echo '</table>';
$sum_avg = $sum/$count;
echo 'Average IR has = '.$sum_avg;
$min = $arr[0]['ir'];
$index_min = 0;
for ($k=1; $k < $count ; $k++) { 
	if ($min > $arr[$k]['ir']) {
		$min = $arr[$k]['ir'];
		$index_min = $k;
	}
}
echo "<p>Minimal IR has = ".$arr[$index_min]['moovie'].";</p>";